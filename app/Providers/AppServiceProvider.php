<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::component('dashboard.layout.app', 'dashboard-layout');
        Blade::component('dashboard.components.add-new-card', 'dashboard-add-new-card');
        Blade::component('dashboard.components.list-card', 'dashboard-list-card');
        Blade::component('dashboard.components.form-card', 'dashboard-form-card');
        Blade::component('dashboard.components.form-input', 'dashboard-form-input');
        Blade::component('dashboard.components.form-label', 'dashboard-form-label');
        Blade::component('dashboard.components.form-submit', 'dashboard-form-submit');
        Blade::component('dashboard.components.form-error', 'dashboard-form-error');
    }
}
