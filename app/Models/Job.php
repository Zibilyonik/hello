<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
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

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);
        if (!$job) {
            abort(404);
        } else {
            return $job;
        }
    }
}
