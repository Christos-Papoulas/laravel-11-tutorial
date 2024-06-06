<?php

namespace App\Models;

use \Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Senior Laravel Developer',
                'salary' => '€60,000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '€30,000',
            ],
            [
                'id' => 3,
                'title' => 'Laravel Developer',
                'salary' => '€20,000',
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
    }
}
