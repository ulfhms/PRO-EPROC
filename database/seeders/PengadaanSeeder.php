<?php

namespace Database\Seeders;

use App\Models\PengadaanBarang;
use Illuminate\Database\Seeder;

class PengadaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengadaans = [
            [
                'budjet_id' => 1,
                'status_pengadaan' => 1,
            ],
            [
                'budjet_id' => 2,
                'status_pengadaan' => 0,
            ],
            [
                'budjet_id' => 3,
                'status_pengadaan' => 1,
            ],
        ];

        foreach($pengadaans as $key => $value){
            PengadaanBarang::create($value);
        }
    }
}
