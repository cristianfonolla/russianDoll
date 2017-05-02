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
            return "<?php if (! App\Matryoshka::setUp($expression)) { ?>";
//            return Matryoshka::setUp($expression);
        });
        Blade::directive('endcache', function ($expression) {
            return "<?php } echo App\Matryoshka::tearDown() ?>";
//            return Matryoshka::tearDown();
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
