<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bank = [
            [
                'nama_bank' => 'BCA',
                'nama_bank' => 'BRI',
            ]
        ];

        foreach($bank as $key => $value){
            Bank::create($value);
        }
    }
}
