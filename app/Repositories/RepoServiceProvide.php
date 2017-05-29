<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Interface', [
        	'App\Repositories\UserRepository',
        	'App\Repositories\RoleRepository'
        ]);
    }
}