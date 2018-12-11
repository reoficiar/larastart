<?php

namespace App\Providers;
<<<<<<< HEAD

=======
use Illuminate\Support\Facades\Schema;
>>>>>>> 98e558d5d8d10ac61c3d3cd65c9f920170d2b8e4
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
<<<<<<< HEAD
=======
        Schema::defaultStringLength(191);
>>>>>>> 98e558d5d8d10ac61c3d3cd65c9f920170d2b8e4
        //
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
