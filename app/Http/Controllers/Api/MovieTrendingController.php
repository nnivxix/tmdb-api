<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\Services\MovieServices;
use App\Http\Resources\MovieTrendingResource;
use App\Providers\Services\TheMovieDBService;

class MovieTrendingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __construct(public TheMovieDBService $tmdb) {}
    public function __invoke(Request $request)
    {
        // dd(collect($this->tmdb->movie()->trending()['results']));
        // $this->tmdb->movie()->trending()['results'];
        return response()->json($this->tmdb->movie()->trending());
        // return MovieTrendingResource::collection((object) $this->tmdb->movie()->trending()['results']);
    }
}
