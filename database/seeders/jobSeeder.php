<?php

namespace Database\Seeders;

use App\Modles\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder {
    public function run(): void {
        //Job::factory(30)->create();
        \App\Models\Job::factory(25)->create();
    }
}