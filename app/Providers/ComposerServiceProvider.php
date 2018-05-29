<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            'user.profile', 'App\Http\ViewComposers\ProfileComposer'
        );

        // Using Closure based composers...
        // View::composer(['article','photo.greeting'], function ($view) {
        //     echo 'ffff';
        // });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}