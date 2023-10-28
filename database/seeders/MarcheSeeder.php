<?php

namespace Database\Seeders;

use App\Models\Marche;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marche::create([
            'nomMarche' => 'Gbégamey',
            'description' => 'Description du marché Gbégamey',
            'capacite' => '1000',
            'adresse' => 'Adresse marché Gbégamey',
            'telephone' => '12345678',
            'image' => '/marche/9pyRzbhLqdcP3Fi9CXCbD11JGgQsb8XwYge7Fijj.png',
            'idVille' => '1',
            'idEmplacement' => '2',
        ]);

        Marche::create([
            'nomMarche' => 'Mènontin',
            'description' => 'Description du marché Mènontin',
            'capacite' => '800',
            'adresse' => 'Adresse marché Mènontin',
            'telephone' => '42395678',
            'image' => '/marche/3d3ibrn2RWJHNQ9P7TrJ8MIa86FHN2y0k2ICwFmX.jpg',
            'idVille' => '1',
            'idEmplacement' => '1',
        ]);

        Marche::create([
            'nomMarche' => 'Wologuèdè',
            'description' => 'Description du marché Wologuèdè',
            'capacite' => '2000',
            'adresse' => 'Adresse marché Wologuèdè',
            'telephone' => '60529516',
            'image' => '/marche/BBuhCgsaIFfPFoA79PABizJjgDadn82Q1OysN8mc.png',
            'idVille' => '2',
            'idEmplacement' => '1',
        ]);
    }
}
