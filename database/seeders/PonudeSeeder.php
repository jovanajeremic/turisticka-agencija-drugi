<?php

namespace Database\Seeders;

use App\Models\Drzava;
use App\Models\Ponuda;
use App\Models\Tip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PonudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {

            Ponuda::create([
                'tip_id' => rand(1, 2),
                'zemlja_id' => rand(1, 50),
                'cena' => rand(100, 4000),
                'popust' => rand(0, 40),
                'duzina_putovanja' => rand(1, 30),
                'naziv' => \Faker\Factory::create()->sentence,
                'opis' => \Faker\Factory::create()->sentence,
            ]);
        }
    }
}
