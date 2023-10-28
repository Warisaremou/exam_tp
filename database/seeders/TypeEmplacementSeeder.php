<?php

namespace Database\Seeders;

use App\Models\TypeEmplacement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeEmplacementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeEmplacement::create([
            'libelle' => 'Bord de carrefour',
        ]);

        TypeEmplacement::create([
            'libelle' => 'Devant église',
        ]);
    }
}
