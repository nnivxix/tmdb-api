<?php

namespace App\Services;

class MovieServices
{
    public function __construct(public HttpTMDB $http) {}

    public function trending()
    {
        $response =  $this->http->baseUrl()
            ->get("/trending/movie/day");

        return $response->json();
    }
}
