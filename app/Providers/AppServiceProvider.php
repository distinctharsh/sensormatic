<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Solution;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $solutions = Solution::active()->orderBy('order')->get();
            $groupedSolutions = $solutions->groupBy('category')->map(function ($items) {
                return $items->groupBy('subcategory');
            });
            $view->with('navbarSolutions', $groupedSolutions);
        });
    }
}
