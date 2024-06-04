<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = [
            [
                'nama' => 'Bromo Paket A',
                'deskripsi' => 'Paket Wisata Bromo 3 Destinasi Wisata Sekitar Bromo',
                'harga' => 300000,
                'foto' => 'bromo.jpg',
            ],
            [
                'nama' => 'Bromo Paket B',
                'deskripsi' => 'Paket Wisata Bromo 5 Destinasi Wisata Sekitar Bromo',
                'harga' => 500000,
                'foto' => 'bromo.jpg',
            ],
            [
                'nama' => 'Bromo Paket C',
                'deskripsi' => 'Paket Wisata Bromo 7 Destinasi Wisata Sekitar Bromo',
                'harga' => 700000,
                'foto' => 'bromo.jpg',
            ],
            [
                'nama' => 'Ranu Kumbolo',
                'deskripsi' => 'Paket Wisata Ranu Kumbolo',
                'harga' => 600000,
                'foto' => 'ranukumbolo.jpg',
            ], 
            [
                'nama' => 'Ranu Regulo',
                'deskripsi' => 'Paket Wisata Ranu Regulo',
                'harga' => 800000,
                'foto' => 'ranuregulo.jpg',
            ],
            [
                'nama' => 'Semeru',
                'deskripsi' => 'Paket Wisata Semeru',
                'harga' => 1000000,
                'foto' => 'semeru.jpg',
            ]
        ];

        foreach ($seeds as $data) {
            Destination::create($data);
        }
    }
}
