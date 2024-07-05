<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

class Job
{
    public static function all():array
    {
        return [
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
                'id' => 5,
                'title' => 'Pauler',
                'salary' => '2 Monies'
            ]
        ];
    }
}

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = Arr::first(Job::all(), fn ($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
