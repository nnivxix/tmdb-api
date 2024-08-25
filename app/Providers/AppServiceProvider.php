<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Services\MovieServices;
use App\Providers\Services\TheMovieDBService;
use App\Providers\Services\TvService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Http;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        // $this->app->singleton(TheMovieDBService::class, function (Application $app) {
        //     return new TheMovieDBService(new MovieServices(), new TvService);
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
