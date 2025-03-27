<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TMDBService
{

    public function __construct(
        public string $apiKey,
        public string $baseUrl,
    ) {
        //
    }

    public function baseApiUrl()
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'accept'        => 'application/json',
        ])
            ->baseUrl($this->baseUrl);
    }
}
