<?php

namespace Database\Seeders;

use App\Models\Drzava;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrzaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {
            Drzava::create([
                'naziv' => \Faker\Factory::create()->country
            ]);
        }
    }
}
