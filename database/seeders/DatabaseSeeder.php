<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'Rein',
            'last_name' => 'Deer',
            'email' => 'rein@deer.com',
        ]);

        // Job::factory(25)->create();
        // Employer::factory(25)->create();
        \App\Models\Job::factory(25)->create();
        \App\Models\Employer::factory(25)->create();

        // CONTROL INDI SEED JOBS
        //$this->call(Job:Seeder::class);
    }
}
