<?php

namespace App\Providers\Services;

class TheMovieDBService
{
    public function __construct(
        public MovieServices $movie,
        public TvService $tv
    ) {}

    public function movie()
    {
        return $this->movie;
    }

    public function tv()
    {
        return $this->tv;
    }
}
