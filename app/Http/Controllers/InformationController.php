<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of information.
     */
    public function index()
    {
        // Get selected language from session, default to 'german'
        $selectedLanguage = session('selected_language', 'german');
        
        $information = Information::active()
            ->byLanguage($selectedLanguage)
            ->orderedByPriority()
            ->get();
            
        return view('information.index', compact('information', 'selectedLanguage'));
    }

    /**
     * Display the specified information.
     */
    public function show(Information $information)
    {
        // Get selected language from session
        $selectedLanguage = session('selected_language', 'german');
        
        // Check if information is active
        if (!$information->is_active) {
            abort(404);
        }
        
        return view('information.show', compact('information', 'selectedLanguage'));
    }

    /**
     * Download the file attached to information.
     */
    public function download(Information $information)
    {
        if (!$information->is_active || !$information->file_path) {
            abort(404);
        }

        $filePath = storage_path('app/public/' . $information->file_path);
        
        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath, $information->file_name);
    }
}
