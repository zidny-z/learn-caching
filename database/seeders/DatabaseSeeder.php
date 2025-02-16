<?php

namespace Database\Seeders;

use App\Models\Employee;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // faking 10,000 data for employee
        \App\Models\Employee::factory()->count(10000)->create();
    }
}
