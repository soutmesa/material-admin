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
        $models = [
            'User',
            'Role',
            'Category',
            'Comment',
            'Tag',
            'Person',
            'Permission',
            'Post'
        ];

        foreach ($models as $idx => $model) {
            $this->app->bind("App\Repositories\\{$model}\\{$model}Interface", "App\Repositories\\{$model}\\{$model}Repository");
        }
    }
}