<?php

namespace App\Models;

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
}
