<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\TheMovieDBService;

class MovieTrendingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __construct(public TheMovieDBService $tmdb) {}
    public function __invoke(Request $request)
    {
        return $this->tmdb->movie()->trending();
    }
}
