<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MovieServices
{
    public function __construct(public HttpTMDB $http) {}

    public function baseUrl()
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . config('movie.api_access_token'),
            'accept'        => 'application/json',
        ])
            ->baseUrl('https://api.themoviedb.org/3');
    }

    public function trending()
    {
        $response =  $this->http->baseUrl()
            ->get('/trending/movie/day');

        return $response->json();
    }
}
