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

        View::composer('*', ProfileComposer::class);
//        View::creator('*', ProfileComposer::class);

        View::composer('property.list', function ($view) {
            $view->with('surname', "Kariya");
        });
    }

}
