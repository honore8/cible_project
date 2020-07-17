<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Repositories\CommentaireRepositoryInterface',
            'App\Repositories\CommentaireRepository'
        );

        $this->app->bind(
            'App\Repositories\ContactRepositoryInterface',
            'App\Repositories\ContactRepository'
        );
        $this->app->bind(
            'App\Repositories\LieuRepositoryInterface',
            'App\Repositories\LieuRepository'
        );

    }
}