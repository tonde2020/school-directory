<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// اختياري: إذا كنت تستخدم MySQL 5.6 أو تواجه مشاكل في الطول
use Illuminate\Support\Facades\Schema;

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
        // اختياري: لمنع مشكلة "Specified key was too long" في MySQL 5.6
        Schema::defaultStringLength(191);
    }
}
