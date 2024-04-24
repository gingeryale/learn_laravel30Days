<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job{
    public static function all(): array{
        return [
            [
            'id'=>1,
            'title' => 'Operator',
            'salary' => '$24,000'
            ],
            [
            'id'=>2,
            'title' => 'Web Developer',
            'salary' => '$29,000'
            ],
            [
            'id'=>3,
            'title' => 'Teacher',
            'salary' => '$34,000'
            ]
        ];
    }
}