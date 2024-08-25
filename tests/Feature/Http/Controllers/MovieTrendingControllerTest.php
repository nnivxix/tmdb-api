<?php

test('should return data trending movie', function () {
    $response = $this->get(route('api.movie.trending'));

    expect($response['results'])->toHaveCount(20);

    $response
        ->assertStatus(200)
        ->assertJsonStructure([
            'page',
            'results',
            'total_pages',
            'total_results'
        ]);
});
