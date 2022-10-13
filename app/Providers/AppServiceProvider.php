<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\HotelInfo;
use App\Models\Room;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;


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
            $view->with('news', Article::all()->take(4));
            $view->with('rooms4', Room::all()->take(4));
            $view->with('rooms3', Room::all()->take(3));
        });

    }
}
