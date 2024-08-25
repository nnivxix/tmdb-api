<?php

namespace App\Services;

use App\Services\HttpTMDB;

class TvService
{
    public function __construct(public HttpTMDB $http) {}

    public function trending()
    {
        $response =  $this->http->baseUrl()
            ->get('/trending/tv/day');

        return $response->json();
    }
}
