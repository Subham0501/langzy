<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherRatingController extends Controller
{
    /**
     * Store a newly created rating in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        // Check if user is authenticated
        if (!Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'You must be logged in to rate a teacher.'
            ], 401);
        }

        // Check if user has already rated this teacher
        $existingRating = TeacherRating::where('teacher_id', $request->teacher_id)
            ->where('user_id', Auth::id())
            ->first();

        if ($existingRating) {
            return response()->json([
                'success' => false,
                'message' => 'You have already rated this teacher.'
            ], 422);
        }

        // Create the rating
        $rating = TeacherRating::create([
            'teacher_id' => $request->teacher_id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        // Load the teacher with updated ratings
        $teacher = Teacher::with('ratings.user')->find($request->teacher_id);

        return response()->json([
            'success' => true,
            'message' => 'Rating submitted successfully.',
            'teacher' => [
                'id' => $teacher->id,
                'average_rating' => round($teacher->average_rating, 1),
                'total_ratings' => $teacher->total_ratings,
            ]
        ]);
    }

    /**
     * Update the specified rating in storage.
     */
    public function update(Request $request, TeacherRating $rating)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        // Check if user owns this rating
        if ($rating->user_id !== Auth::id()) {
            return response()->json([
                'success' => false,
                'message' => 'You can only update your own ratings.'
            ], 403);
        }

        $rating->update([
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        // Load the teacher with updated ratings
        $teacher = Teacher::with('ratings.user')->find($rating->teacher_id);

        return response()->json([
            'success' => true,
            'message' => 'Rating updated successfully.',
            'teacher' => [
                'id' => $teacher->id,
                'average_rating' => round($teacher->average_rating, 1),
                'total_ratings' => $teacher->total_ratings,
            ]
        ]);
    }

    /**
     * Remove the specified rating from storage.
     */
    public function destroy(TeacherRating $rating)
    {
        // Check if user owns this rating
        if ($rating->user_id !== Auth::id()) {
            return response()->json([
                'success' => false,
                'message' => 'You can only delete your own ratings.'
            ], 403);
        }

        $teacherId = $rating->teacher_id;
        $rating->delete();

        // Load the teacher with updated ratings
        $teacher = Teacher::with('ratings.user')->find($teacherId);

        return response()->json([
            'success' => true,
            'message' => 'Rating deleted successfully.',
            'teacher' => [
                'id' => $teacher->id,
                'average_rating' => round($teacher->average_rating, 1),
                'total_ratings' => $teacher->total_ratings,
            ]
        ]);
    }

    /**
     * Get ratings for a specific teacher.
     */
    public function getTeacherRatings(Teacher $teacher)
    {
        $ratings = $teacher->ratings()
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return response()->json([
            'success' => true,
            'ratings' => $ratings,
            'teacher' => [
                'id' => $teacher->id,
                'name' => $teacher->name,
                'average_rating' => round($teacher->average_rating, 1),
                'total_ratings' => $teacher->total_ratings,
            ]
        ]);
    }
}
