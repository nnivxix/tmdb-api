<?php

namespace App\Providers\Services;

use Illuminate\Support\Facades\Http;

class TvService
{
    public function trending()
    {
        $response =  Http::withHeaders([
            'Authorization' => 'Bearer ' . config('movie.api_access_token'),
            'accept'        => 'application/json',
        ])
            ->get('https://api.themoviedb.org/3/trending/tv/day');

        return $response->json();
    }
}
