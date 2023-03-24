<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProvidersTableSeeder;
use Database\Seeders\CategorysTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProvidersTableSeeder::class);
    }
    public function run(): void
    {
        $this->call(ProvidersTableSeeder::class);
    }
}
