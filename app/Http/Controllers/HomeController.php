<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counsellor;

class HomeController extends Controller
{
    public function index()
    {
        $counsellors = Counsellor::where('is_active', true)
            ->orderBy('priority', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('home', compact('counsellors'));
    }

    public function contact()
    {
        return view('contact');
    }
}
