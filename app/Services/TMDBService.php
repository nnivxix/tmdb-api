<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TMDBService
{

    public function __construct(
        public string $apiKey,
        public string $baseUrl,
    ) {
        // $this->apiKey = config('movie.api_access_token');
        // $this->baseUrl = 'https://api.themoviedb.org/3';
    }
}
