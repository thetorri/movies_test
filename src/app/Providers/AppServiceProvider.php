<?php

namespace App\Providers;

use App\Interfaces\MovieConnectorInterface;
use App\Interfaces\MovieServiceInterface;
use App\Services\RedisMovieService;
use App\Services\TheMovieDBConnectorService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MovieConnectorInterface::class, TheMovieDBConnectorService::class);
        $this->app->bind(MovieServiceInterface::class, RedisMovieService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
