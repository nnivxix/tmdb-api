<?php

namespace App\Services;

use Illuminate\Http\Request;
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

    public function getPopularMovies(Request $request): array
    {
        $response = $this->tmdbService
            ->baseApiUrl()
            ->get('/movie/popular', [
                'page' => $request->query('page', 1),
            ]);

        return $response->json();
    }
}
