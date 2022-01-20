<?php

namespace Database\Seeders;

use App\Models\BidangUsaha;
use Illuminate\Database\Seeder;

class BidangUsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bingus = [
            [
             'nama_bingus' => 'Pertanian',
            ],[
             'nama_bingus' => 'Manufaktur',
            ],[
             'nama_bingus' => 'Konstruksi',
            ],[
             'nama_bingus' => 'Jasa',
            ],[
             'nama_bingus' => 'Teknologi',
             ]
        ];

        foreach($bingus as $key => $value){
            BidangUsaha::create($value);
        }
    }
}
