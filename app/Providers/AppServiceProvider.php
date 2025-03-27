<?php

namespace App\Providers;

use App\Services\TvService;
use App\Services\MovieService;
use App\Services\TheMovieDBService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use App\Services\Interface\MovieServiceInterface;
use App\Services\TMDBService;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        // $this->app->singleton(TheMovieDBService::class, function (Application $app) {
        //     return new TheMovieDBService(new MovieServices(), new TvService());
        // });

        $this->app->singleton(TMDBService::class, function (Application $app) {
            return new TMDBService(
                config('movie.api_access_token'),
                'https://api.themoviedb.org/3'
            );
        });

        $this->app->bind(MovieServiceInterface::class, function (Application $app) {
            return new MovieService($app->make(TMDBService::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
