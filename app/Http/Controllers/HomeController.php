<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counsellor;
use App\Models\Teacher;

class HomeController extends Controller
{
    /**
     * Show the welcome/language selection page
     */
    public function welcome()
    {
        // Clear language selection so user can choose again
        session()->forget('selected_language');
        
        return view('welcome');
    }

    public function index()
    {
        // If no language selected, redirect to welcome page
        if (!session()->has('selected_language')) {
            return redirect()->route('welcome');
        }
        
        // Get selected language from session
        $selectedLanguage = session('selected_language');
        
        $counsellors = Counsellor::where('is_active', true)
            ->byLanguage($selectedLanguage)
            ->orderBy('priority', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
            
        $teachers = Teacher::active()
            ->byLanguage($selectedLanguage)
            ->orderedByPriority()
            ->with(['ratings' => function($query) use ($selectedLanguage) {
                $query->byLanguage($selectedLanguage);
            }])
            ->get();
            
        return view('home', compact('counsellors', 'teachers', 'selectedLanguage'));
    }

    public function ourTeam()
    {
        // Get selected language from session, default to 'german'
        $selectedLanguage = session('selected_language', 'german');
        
        $teachers = Teacher::active()
            ->byLanguage($selectedLanguage)
            ->orderedByPriority()
            ->with(['ratings' => function($query) use ($selectedLanguage) {
                $query->byLanguage($selectedLanguage);
            }])
            ->get();
            
        return view('our-team', compact('teachers', 'selectedLanguage'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function faq()
    {
        return view('faq');
    }

    public function switchLanguage(Request $request, $language)
    {
        // Map language codes: 'german', 'french', or 'austrian'
        $validLanguages = ['german', 'french', 'austrian'];
        
        if (in_array($language, $validLanguages)) {
            session(['selected_language' => $language]);
        }
        
        // Redirect to home page after selecting language
        return redirect()->route('home');
    }
}
