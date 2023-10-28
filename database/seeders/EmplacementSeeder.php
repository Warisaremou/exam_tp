<?php

namespace Database\Seeders;

use App\Models\Emplacement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmplacementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Emplacement::create([
            'numero' => '0075-BA',
            'idType' => '1',
        ]);

        Emplacement::create([
            'numero' => '0955-SM',
            'idType' => '2',
        ]);
    }
}
