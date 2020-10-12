<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/** 
* Jika Migrate error maka tambahkan code dibawah ini dan juga pada method boot
* use Illuminate\Support\Facades\Schema;
*/

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** 
        * Schema::defaultStringLength(255);
        */
         
    }
}
