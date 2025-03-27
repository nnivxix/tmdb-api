<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Interface\MovieServiceInterface;

class PopularMovieController extends Controller
{

    public function __construct(
        protected MovieServiceInterface $movieService
    ) {}

    public function __invoke(Request $request)
    {
        $movies = $this->movieService->getPopularMovies($request);

        return  response()->json($movies, 200);
    }
}
