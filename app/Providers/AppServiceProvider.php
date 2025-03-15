<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function ($view) {
            $view->with('siteSettingData', SiteSetting::first());
            $view->with('servicesData', Service::get());
        });
    }
}
