<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Bobber',
                'salary' => '10 Monies'
            ],
            [
                'id' => 2,
                'title' => 'Johner',
                'salary' => '4 Monies'
            ],
            [
                'id' => 3,
                'title' => 'Peacher',
                'salary' => '7 Monies'
            ],
            [
                'id' => 4,
                'title' => 'Vincentman',
                'salary' => '8 Monies'
            ],
            [
                'title' => 'Pauler',
                'salary' => '2 Monies'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
