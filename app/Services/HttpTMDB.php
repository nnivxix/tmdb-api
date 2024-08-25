<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HttpTMDB
{
    public function baseUrl()
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . config('movie.api_access_token'),
            'accept'        => 'application/json',
        ])
            ->baseUrl('https://api.themoviedb.org/3');
    }
}
