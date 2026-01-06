<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
    /**
     * Display a listing of information.
     */
    public function index()
    {
        $information = Information::orderBy('priority', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            
        return view('admin.information.index', compact('information'));
    }

    /**
     * Show the form for creating new information.
     */
    public function create()
    {
        return view('admin.information.create');
    }

    /**
     * Store newly created information.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|max:10240', // 10MB max
            'language' => 'required|in:german,french,austrian',
            'priority' => 'integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data['is_active'] = $request->has('is_active');
        $data['priority'] = $data['priority'] ?? 0;

        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->store('information', 'public');
            
            $data['file_path'] = $filePath;
            $data['file_name'] = $fileName;
            $data['file_type'] = $file->getClientMimeType();
        }

        Information::create($data);

        return redirect()->route('admin.information.index')
            ->with('status', 'Information created successfully');
    }

    /**
     * Show the form for editing information.
     */
    public function edit(Information $information)
    {
        return view('admin.information.edit', compact('information'));
    }

    /**
     * Update the information.
     */
    public function update(Request $request, Information $information)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|max:10240', // 10MB max
            'language' => 'required|in:german,french,austrian',
            'priority' => 'integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data['is_active'] = $request->has('is_active');
        $data['priority'] = $data['priority'] ?? 0;

        // Handle file upload
        if ($request->hasFile('file')) {
            // Delete old file if exists
            if ($information->file_path) {
                Storage::disk('public')->delete($information->file_path);
            }

            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->store('information', 'public');
            
            $data['file_path'] = $filePath;
            $data['file_name'] = $fileName;
            $data['file_type'] = $file->getClientMimeType();
        }

        // Handle file removal
        if ($request->has('remove_file') && $request->remove_file) {
            if ($information->file_path) {
                Storage::disk('public')->delete($information->file_path);
            }
            $data['file_path'] = null;
            $data['file_name'] = null;
            $data['file_type'] = null;
        }

        $information->update($data);

        return redirect()->route('admin.information.index')
            ->with('status', 'Information updated successfully');
    }

    /**
     * Remove the information.
     */
    public function destroy(Information $information)
    {
        // Delete file if exists
        if ($information->file_path) {
            Storage::disk('public')->delete($information->file_path);
        }

        $information->delete();

        return redirect()->route('admin.information.index')
            ->with('status', 'Information deleted successfully');
    }
}
