<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interface\MovieServiceInterface;

class PopularMovieController extends Controller
{

    public function __construct(
        protected MovieServiceInterface $movieService
    ) {}

    public function __invoke(Request $request)
    {
        $movies = $this->movieService->getPopularMovies();

        return  response()->json($movies, 200);
    }
}
