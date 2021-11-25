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
            ['nama' => 'IT']
        ];

        foreach($bingus as $key => $value){
            BidangUsaha::create($value);
        }
    }
}
