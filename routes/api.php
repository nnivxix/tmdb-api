<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PopularMovieController;

Route::get('/', function (Request $request) {
    return response()->json([
        'app'     => 'Laravel',
        'version' => app()->version(),
        'type'    => 'api'
    ]);
});

Route::name('api.')->group(function () {
    Route::get('/movies/popular', PopularMovieController::class)->name('movies.popular');
});
