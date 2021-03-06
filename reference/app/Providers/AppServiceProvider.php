<?php

namespace App\Providers;

use App\Models\Color;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        Blade::withoutDoubleEncoding();
        $this->app->singleton(Color::class, function ($app) {
            return Color::find(3);
        });

        Response::macro('caps', function ($value) {
            return Response::make(strtoupper($value));
        });
        View::share('person_name', 'Jayram');
//        Relation::morphMap([
//            'post' => 'App\Models\Post',
//            'video' => 'App\Models\Video',
//        ]);
    }
}
