<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Click;

class ClickSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Click::factory(30)->create([
            'ip' => \Faker\Factory::create()->ipv4,
        ]);
    }
}
