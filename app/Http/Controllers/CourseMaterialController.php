<?php

namespace App\Http\Controllers;

use App\Models\GrammarCategory;
use App\Models\GrammarContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CourseMaterialController extends Controller
{
    /**
     * Check if user is authenticated (either logged in or admin)
     */
    private function isUserAuthenticated()
    {
        return Auth::check() || session('is_admin');
    }

    /**
     * Truncate content to 30% for non-authenticated users
     */
    private function truncateContent($content, $isAuthenticated = false)
    {
        if ($isAuthenticated) {
            return $content;
        }

        // Remove HTML tags for accurate character count
        $plainText = strip_tags($content);
        $targetLength = (int) (strlen($plainText) * 0.3);
        
        if (strlen($plainText) <= $targetLength) {
            return $content;
        }

        // Find a good breaking point (end of sentence or word)
        $truncated = Str::limit($plainText, $targetLength, '');
        
        // Try to break at sentence end
        $lastPeriod = strrpos($truncated, '.');
        $lastExclamation = strrpos($truncated, '!');
        $lastQuestion = strrpos($truncated, '?');
        
        $lastSentenceEnd = max($lastPeriod, $lastExclamation, $lastQuestion);
        
        if ($lastSentenceEnd > $targetLength * 0.7) {
            $truncated = substr($truncated, 0, $lastSentenceEnd + 1);
        }

        return $truncated . '...';
    }

    public function index()
    {
        $categories = GrammarCategory::where('is_active', true)
            ->with(['contents' => function($query) {
                $query->where('is_active', true)->orderBy('sort_order')->orderBy('title');
            }])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $isAuthenticated = $this->isUserAuthenticated();

        return view('course-material.index', compact('categories', 'isAuthenticated'));
    }

    public function showCategory(GrammarCategory $category)
    {
        $category->load(['contents' => function($query) {
            $query->where('is_active', true)->orderBy('sort_order')->orderBy('title');
        }]);

        $isAuthenticated = $this->isUserAuthenticated();

        return view('course-material.category', compact('category', 'isAuthenticated'));
    }

    public function showContent(GrammarContent $content)
    {
        $content->load(['category', 'subcategory']);
        
        $isAuthenticated = $this->isUserAuthenticated();
        
        // Truncate content if user is not authenticated
        if (!$isAuthenticated) {
            $content->original_content = $content->content;
            $content->content = $this->truncateContent($content->content, false);
        }

        return view('course-material.content', compact('content', 'isAuthenticated'));
    }
}
