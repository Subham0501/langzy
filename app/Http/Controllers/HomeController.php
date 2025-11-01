<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counsellor;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index()
    {
        $counsellors = Counsellor::where('is_active', true)
            ->orderBy('priority', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
            
        $teachers = Teacher::active()
            ->orderedByPriority()
            ->with('ratings')
            ->get();
            
        return view('home', compact('counsellors', 'teachers'));
    }

    public function ourTeam()
    {
        $teachers = Teacher::active()
            ->orderedByPriority()
            ->with('ratings')
            ->get();
            
        return view('our-team', compact('teachers'));
    }

    public function contact()
    {
        return view('contact');
    }
}
