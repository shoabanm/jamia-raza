<?php

namespace App\Providers;

use App\Models\AyatOfTheDay;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

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
        //  getting the ayat of the day in every page 
        View::composer('*', function ($view) {
            $latestAyat = AyatOfTheDay::whereApproved(1)->latest('display_date')->first();
            $view->with('latestAyat', $latestAyat);
        });
        Paginator::useBootstrap();
    }
}
