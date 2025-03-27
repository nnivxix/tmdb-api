<?php

namespace App\Services;

use App\Services\TMDBService;
use Illuminate\Support\Facades\Http;
use App\Services\Interface\MovieServiceInterface;

class MovieService implements MovieServiceInterface
{
    protected $tmdbService;

    public function __construct(TMDBService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }

    public function getPopularMovies(): array
    {
        $response = $this->tmdbService
            ->baseApiUrl()
            ->get('/movie/popular');

        return $response->json();
    }
}
