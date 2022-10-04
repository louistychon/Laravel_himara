<?php

namespace App\Providers;

use App\Models\HotelInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

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
           view()->composer('*',function($view) {
            $view->with('user', Auth::user());
            $view->with('hotelinfo', HotelInfo::all());
        });
    }
}
