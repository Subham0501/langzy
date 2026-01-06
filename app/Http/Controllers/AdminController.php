<?php

namespace App\Http\Controllers;

use App\Models\Counsellor;
use App\Models\User;
use App\Models\Teacher;
use App\Models\GrammarCategory;
use App\Models\GrammarSubcategory;
use App\Models\GrammarContent;
use App\Services\ImageUploadService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $imageUploadService;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate(['email' => 'required|email', 'password' => 'required']);
        
        // First try to authenticate as admin (role 'a')
        $adminUser = User::where('email', $request->email)->where('role', 'a')->first();
        if ($adminUser && Hash::check($request->password, $adminUser->password)) {
            $request->session()->put('is_admin', true);
            $request->session()->put('admin_user_id', $adminUser->id);
            return redirect()->route('admin.dashboard');
        }
        
        // Then try to authenticate as regular user (role 'u') using Laravel Auth
        $user = User::where('email', $request->email)->where('role', 'u')->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('home');
        }
        
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        // Logout admin session
        if ($request->session()->has('is_admin')) {
            $request->session()->forget('is_admin');
            $request->session()->forget('admin_user_id');
        }
        
        // Logout Laravel Auth user
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        
        return redirect()->route('home');
    }

    public function index()
    {
        $counsellors = Counsellor::orderBy('priority', 'desc')->orderByDesc('created_at')->paginate(10);
        return view('admin.counsellors.index', compact('counsellors'));
    }

    public function create()
    {
        return view('admin.counsellors.create');
    }

    public function store(Request $request)
    {
        \Log::info('AdminController@store invoked', ['payload' => $request->all()]);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,gif,webp|max:5120', // 5MB max
            'price_rs' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:10|max:240',
            'priority' => 'nullable|integer|min:0|max:999',
            'is_active' => 'nullable|in:on,1,true'
        ]);
        
        $data['is_active'] = $request->has('is_active');
        
        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoUrl = $this->imageUploadService->uploadImage($request->file('photo'));
            if ($photoUrl) {
                $data['photo_url'] = $photoUrl;
            } else {
                return back()->withErrors(['photo' => 'Failed to upload image. Please try again.']);
            }
        }
        
        unset($data['photo']); // Remove photo from data array as it's not a database field
        
        $c = Counsellor::create($data);
        \Log::info('Counsellor created', ['id' => $c->id]);
        return redirect()->route('admin.counsellors.index')->with('status', 'Counsellor created');
    }

    public function edit(Counsellor $counsellor)
    {
        return view('admin.counsellors.edit', compact('counsellor'));
    }

    public function update(Request $request, Counsellor $counsellor)
    {
        \Log::info('AdminController@update invoked', ['counsellor_id' => $counsellor->id, 'payload' => $request->all()]);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,gif,webp|max:5120', // 5MB max
            'price_rs' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:10|max:240',
            'priority' => 'nullable|integer|min:0|max:999',
            'is_active' => 'nullable|in:on,1,true',
            'language' => 'required|in:german,french'
        ]);
        
        $data['is_active'] = $request->has('is_active');
        
        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($counsellor->photo_url) {
                $this->imageUploadService->deleteImage($counsellor->photo_url);
            }
            
            $photoUrl = $this->imageUploadService->uploadImage($request->file('photo'));
            if ($photoUrl) {
                $data['photo_url'] = $photoUrl;
            } else {
                return back()->withErrors(['photo' => 'Failed to upload image. Please try again.']);
            }
        }
        
        unset($data['photo']); // Remove photo from data array as it's not a database field
        
        $counsellor->update($data);
        \Log::info('Counsellor updated', ['id' => $counsellor->id]);
        return redirect()->route('admin.counsellors.index')->with('status', 'Counsellor updated');
    }

    public function destroy(Counsellor $counsellor)
    {
        // Delete photo from Cloudflare R2 if it exists
        if ($counsellor->photo_url) {
            $this->imageUploadService->deleteImage($counsellor->photo_url);
        }
        
        $counsellor->delete();
        \Log::info('Counsellor deleted', ['id' => $counsellor->id]);
        return redirect()->route('admin.counsellors.index')->with('status', 'Counsellor deleted');
    }

    public function users()
    {
        $users = User::orderByDesc('created_at')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function dashboard()
    {
        $stats = [
            'users' => User::count(),
            'counsellors' => Counsellor::count(),
            'active_counsellors' => Counsellor::where('is_active', true)->count(),
            'teachers' => Teacher::count(),
            'active_teachers' => Teacher::where('is_active', true)->count(),
            'grammar_categories' => GrammarCategory::count(),
            'grammar_subcategories' => GrammarSubcategory::count(),
            'grammar_contents' => GrammarContent::count(),
            'active_contents' => GrammarContent::where('is_active', true)->count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:u,a',
        ]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('admin.users.index')->with('status', 'User created');
    }
}


