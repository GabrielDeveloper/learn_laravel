<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TypeFileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\TypeFile::class,
            \App\TypeOneFile::class
        );
    }
}
