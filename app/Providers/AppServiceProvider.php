<?php

namespace App\Providers;

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
        view()->composer('layouts._sidebar', function ($view) {
          $view->with('tags', \App\Tag::pluck('name'));
          $view->with('languages', \App\Language::pluck('name'));
          $view->with('snippets', \App\Snippet::all());
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
