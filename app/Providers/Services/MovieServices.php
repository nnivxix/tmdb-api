<?php

namespace App\Providers\Services;

use Illuminate\Support\Facades\Http;

class MovieServices
{

    public function trending()
    {
        $response =  Http::withHeaders([
            'Authorization' => 'Bearer ' . config('movie.api_access_token'),
            'accept'        => 'application/json',
        ])
            ->get('https://api.themoviedb.org/3/trending/movie/day');

        return $response->json();
    }
}
