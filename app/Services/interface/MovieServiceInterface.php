<?php

namespace App\Services\Interface;

use Illuminate\Http\Request;

interface MovieServiceInterface
{
    public function getPopularMovies(Request $request): array;
}
