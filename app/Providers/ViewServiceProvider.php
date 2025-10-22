<?php

namespace App\Providers;

use App\Models\GrammarCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share course material categories and authentication status with all views
        View::composer('*', function ($view) {
            $courseMaterialCategories = GrammarCategory::where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get();

            $isAuthenticated = Auth::check() || session('is_admin');

            $view->with([
                'courseMaterialCategories' => $courseMaterialCategories,
                'isAuthenticated' => $isAuthenticated
            ]);
        });
    }
}
