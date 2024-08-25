<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieTrendingController;

Route::get('/', function (Request $request) {
    return response()->json([
        'app'     => 'Laravel',
        'version' => app()->version(),
        'type'    => 'api'

    ]);
});

Route::name('api.')->group(function () {
    Route::get('/movie/trending', MovieTrendingController::class)->name('movie.trending');
});
