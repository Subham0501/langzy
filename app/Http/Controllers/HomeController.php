<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counsellor;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index()
    {
        // Get selected language from session, default to 'german'
        $selectedLanguage = session('selected_language', 'german');
        
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
        
        return redirect()->back();
    }
}
