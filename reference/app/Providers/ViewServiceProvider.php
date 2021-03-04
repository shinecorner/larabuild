<?php

namespace App\Providers;

use App\Http\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        View::creator('*', ProfileComposer::class);
        View::composer('*', ProfileComposer::class);

        // Using closure based composers...
        View::composer('posts.list', function ($view) {
            $view->with('surname', "Kariya");
        });
    }
}
