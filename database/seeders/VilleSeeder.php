<?php

namespace Database\Seeders;

use App\Models\Ville;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ville::create([
            'nomVille' => 'Cotonou',
        ]);

        Ville::create([
            'nomVille' => 'Porto-Novo',
        ]);
    }
}
