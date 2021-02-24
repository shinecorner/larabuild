<?php

namespace App\Providers;

use App\Models\Color;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

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

//        Relation::morphMap([
//            'post' => 'App\Models\Post',
//            'video' => 'App\Models\Video',
//        ]);
    }
}
