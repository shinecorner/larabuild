<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Color;
use Illuminate\Support\Facades\Response;

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
        $this->app->singleton(Color::class, function ($app) {
            return Color::find(3);
        });
        Schema::defaultStringLength(191);

        Response::macro('caps', function ($value) {
            return Response::make(strtoupper($value));
        });
    }
}
