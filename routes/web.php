<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'Bobber',
                'salary' => '10 Monies'
            ],
            [
                'title' => 'Johner',
                'salary' => '4 Monies'
            ],
            [
                'title' => 'Peacher',
                'salary' => '7 Monies'
            ],
            [
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});