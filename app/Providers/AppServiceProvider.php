<?php

namespace App\Providers;

use App\Matryoshka;
use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('cache', function ($expression) {
            return Matryoshka::setUp($expression);
        });
        Blade::directive('endcache', function ($expression) {
            return Matryoshka::tearDown();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
