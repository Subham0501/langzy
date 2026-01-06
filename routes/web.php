<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\GrammarController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\CourseMaterialController;
use App\Http\Controllers\TeacherRatingController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\Admin\InformationController as AdminInformationController;

Route::get('/language/{language}', [HomeController::class, 'switchLanguage'])->name('language.switch');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('our-team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/terms-of-service', function () {
    return view('terms-of-service');
})->name('terms');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy');
Route::get('/german-learning-plans', function () {
    return view('german-learning-plans');
})->name('german-learning-plans');
Route::get('/french-learning-plans', function () {
    return view('french-learning-plans');
})->name('french-learning-plans');
Route::get('/austrian-learning-plans', function () {
    return view('austrian-learning-plans');
})->name('austrian-learning-plans');

// Sitemap Route
Route::get('/sitemap.xml', function () {
    $baseUrl = url('/');
    $lastmod = date('Y-m-d');
    
    $urls = [
        [
            'loc' => $baseUrl,
            'lastmod' => $lastmod,
            'changefreq' => 'weekly',
            'priority' => '1.0'
        ],
        [
            'loc' => route('our-team'),
            'lastmod' => $lastmod,
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ],
        [
            'loc' => route('about-us'),
            'lastmod' => $lastmod,
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ],
        [
            'loc' => route('faq'),
            'lastmod' => $lastmod,
            'changefreq' => 'monthly',
            'priority' => '0.7'
        ],
        [
            'loc' => route('contact'),
            'lastmod' => $lastmod,
            'changefreq' => 'monthly',
            'priority' => '0.7'
        ],
        [
            'loc' => route('course-material.index'),
            'lastmod' => $lastmod,
            'changefreq' => 'weekly',
            'priority' => '0.9'
        ],
        [
            'loc' => route('german-learning-plans'),
            'lastmod' => $lastmod,
            'changefreq' => 'monthly',
            'priority' => '0.9'
        ],
        [
            'loc' => route('french-learning-plans'),
            'lastmod' => $lastmod,
            'changefreq' => 'monthly',
            'priority' => '0.9'
        ],
        [
            'loc' => route('austrian-learning-plans'),
            'lastmod' => $lastmod,
            'changefreq' => 'monthly',
            'priority' => '0.9'
        ],
        [
            'loc' => route('information.index'),
            'lastmod' => $lastmod,
            'changefreq' => 'weekly',
            'priority' => '0.8'
        ],
    ];
    
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
    $xml .= '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
    $xml .= '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
    $xml .= '        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";
    
    foreach ($urls as $url) {
        $xml .= "    <url>\n";
        $xml .= "        <loc>" . htmlspecialchars($url['loc']) . "</loc>\n";
        $xml .= "        <lastmod>" . $url['lastmod'] . "</lastmod>\n";
        $xml .= "        <changefreq>" . $url['changefreq'] . "</changefreq>\n";
        $xml .= "        <priority>" . $url['priority'] . "</priority>\n";
        $xml .= "    </url>\n";
    }
    
    $xml .= "</urlset>";
    
    return response($xml, 200)
        ->header('Content-Type', 'application/xml; charset=utf-8')
        ->header('Cache-Control', 'public, max-age=3600');
})->name('sitemap');

// Course Material Routes
Route::get('/course-material', [CourseMaterialController::class, 'index'])->name('course-material.index');
Route::get('/course-material/category/{category}', [CourseMaterialController::class, 'showCategory'])->name('course-material.category');
Route::get('/course-material/content/{content}', [CourseMaterialController::class, 'showContent'])->name('course-material.content');

// Information Routes (Public - No Login Required)
Route::get('/information', [InformationController::class, 'index'])->name('information.index');
Route::get('/information/{information}', [InformationController::class, 'show'])->name('information.show');
Route::get('/information/{information}/download', [InformationController::class, 'download'])->name('information.download');

// Teacher Rating Routes
Route::post('/teacher-ratings', [TeacherRatingController::class, 'store'])->name('teacher-ratings.store');
Route::put('/teacher-ratings/{rating}', [TeacherRatingController::class, 'update'])->name('teacher-ratings.update');
Route::delete('/teacher-ratings/{rating}', [TeacherRatingController::class, 'destroy'])->name('teacher-ratings.destroy');
Route::get('/teachers/{teacher}/ratings', [TeacherRatingController::class, 'getTeacherRatings'])->name('teachers.ratings');

// Admin auth
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout.get');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin counsellors
Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/counsellors', [AdminController::class, 'index'])->name('admin.counsellors.index');
    Route::get('/admin/counsellors/create', [AdminController::class, 'create'])->name('admin.counsellors.create');
    Route::post('/admin/counsellors', [AdminController::class, 'store'])->name('admin.counsellors.store');
    Route::get('/admin/counsellors/{counsellor}/edit', [AdminController::class, 'edit'])->name('admin.counsellors.edit');
    Route::put('/admin/counsellors/{counsellor}', [AdminController::class, 'update'])->name('admin.counsellors.update');
    Route::delete('/admin/counsellors/{counsellor}', [AdminController::class, 'destroy'])->name('admin.counsellors.destroy');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users.index');
    Route::get('/admin/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/admin/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
    
    // Teacher Management Routes
    Route::resource('admin/teachers', TeacherController::class)->names([
        'index' => 'admin.teachers.index',
        'create' => 'admin.teachers.create',
        'store' => 'admin.teachers.store',
        'show' => 'admin.teachers.show',
        'edit' => 'admin.teachers.edit',
        'update' => 'admin.teachers.update',
        'destroy' => 'admin.teachers.destroy',
    ]);

    // Information Management Routes
    Route::prefix('admin/information')->name('admin.information.')->group(function () {
        Route::get('/', [AdminInformationController::class, 'index'])->name('index');
        Route::get('/create', [AdminInformationController::class, 'create'])->name('create');
        Route::post('/', [AdminInformationController::class, 'store'])->name('store');
        Route::get('/{information}/edit', [AdminInformationController::class, 'edit'])->name('edit');
        Route::put('/{information}', [AdminInformationController::class, 'update'])->name('update');
        Route::delete('/{information}', [AdminInformationController::class, 'destroy'])->name('destroy');
    });

    // Grammar/Vocabulary Management Routes
    Route::prefix('admin/grammar')->name('admin.grammar.')->group(function () {
        // Categories
        Route::get('/categories', [GrammarController::class, 'categories'])->name('categories');
        Route::get('/categories/create', [GrammarController::class, 'createCategory'])->name('categories.create');
        Route::post('/categories', [GrammarController::class, 'storeCategory'])->name('categories.store');
        Route::get('/categories/{category}/edit', [GrammarController::class, 'editCategory'])->name('categories.edit');
        Route::put('/categories/{category}', [GrammarController::class, 'updateCategory'])->name('categories.update');
        Route::delete('/categories/{category}', [GrammarController::class, 'destroyCategory'])->name('categories.destroy');
        
        // Subcategories
        Route::get('/subcategories', [GrammarController::class, 'subcategories'])->name('subcategories');
        Route::get('/subcategories/create', [GrammarController::class, 'createSubcategory'])->name('subcategories.create');
        Route::post('/subcategories', [GrammarController::class, 'storeSubcategory'])->name('subcategories.store');
        Route::get('/subcategories/{subcategory}/edit', [GrammarController::class, 'editSubcategory'])->name('subcategories.edit');
        Route::put('/subcategories/{subcategory}', [GrammarController::class, 'updateSubcategory'])->name('subcategories.update');
        Route::delete('/subcategories/{subcategory}', [GrammarController::class, 'destroySubcategory'])->name('subcategories.destroy');
        
        // Contents
        Route::get('/contents', [GrammarController::class, 'index'])->name('contents.index');
        Route::get('/contents/create', [GrammarController::class, 'create'])->name('contents.create');
        Route::post('/contents', [GrammarController::class, 'store'])->name('contents.store');
        Route::get('/contents/{content}', [GrammarController::class, 'show'])->name('contents.show');
        Route::get('/contents/{content}/edit', [GrammarController::class, 'edit'])->name('contents.edit');
        Route::put('/contents/{content}', [GrammarController::class, 'update'])->name('contents.update');
        Route::delete('/contents/{content}', [GrammarController::class, 'destroy'])->name('contents.destroy');
    });
});
