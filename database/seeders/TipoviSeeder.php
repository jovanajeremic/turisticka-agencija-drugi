<?php

namespace Database\Seeders;

use App\Models\Tip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Letovanje', 'Zimovanje'] as $naziv) {
            Tip::create([
                'tip' => $naziv,
            ]);
        }
    }
}
