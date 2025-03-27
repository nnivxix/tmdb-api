<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Services\TMDBService;
use Illuminate\Support\Facades\Http;
use App\Services\Interface\MovieServiceInterface;

class MovieService implements MovieServiceInterface
{
    public function __construct(protected TMDBService $tmdbService)
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
