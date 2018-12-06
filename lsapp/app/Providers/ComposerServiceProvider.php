<?php

namespace App\Providers;

use App\Categorie;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share ( 'categories', $categories );
           // Using Closure based composers...
        View::composer('layouts.app', function ($view) {
            $categories = Categorie::all();
            $view->with('categories', $categories);
        });
    }

    /**
     * Register s<button type="button" onclick="window.location='{{ route("pEdit",array("parameter1")) }}'">Button</button>
    shareimprove thiservices.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
