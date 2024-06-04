<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = [
            [
                'destination_id' => 1,
                'nama' => 'Budi',
                'nomor_telepon' => '08123456789',
                'alamat' => 'Jl. Raya No. 1',
                'dokumentasi' => true,
                'jumlah_orang' => 5,
                'tanggal' => '2024-06-01',
                'total_pembayaran' => 500000,
            ],
            [
                'destination_id' => 2,
                'nama' => 'Andi',
                'nomor_telepon' => '08123456789',
                'alamat' => 'Jl. Raya No. 2',
                'dokumentasi' => false,
                'jumlah_orang' => 10,
                'tanggal' => '2024-06-02',
                'total_pembayaran' => 1000000,
            ],
            [
                'destination_id' => 3,
                'nama' => 'Caca',
                'nomor_telepon' => '08123456789',
                'alamat' => 'Jl. Raya No. 3',
                'dokumentasi' => true,
                'jumlah_orang' => 15,
                'tanggal' => '2024-06-03',
                'total_pembayaran' => 1500000,
            ],
            [
                'destination_id' => 4,
                'nama' => 'Dedi',
                'nomor_telepon' => '08123456789',
                'alamat' => 'Jl. Raya No. 4',
                'dokumentasi' => false,
                'jumlah_orang' => 20,
                'tanggal' => '2024-06-04',
                'total_pembayaran' => 2000000,
            ],
            [
                'destination_id' => 5,
                'nama' => 'Euis',
                'nomor_telepon' => '08123456789',
                'alamat' => 'Jl. Raya No. 5',
                'dokumentasi' => true,
                'jumlah_orang' => 25,
                'tanggal' => '2024-06-05',
                'total_pembayaran' => 2500000,
            ],
            [
                'destination_id' => 6,
                'nama' => 'Fafa',
                'nomor_telepon' => '08123456789',
                'alamat' => 'Jl. Raya No. 6',
                'dokumentasi' => false,
                'jumlah_orang' => 30,
                'tanggal' => '2024-06-06',
                'total_pembayaran' => 3000000,
            ]
        ];

        foreach ($seed as $data) {
            Order::create($data);
        }
    }
}
