<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'jayaabadi',
                'nama' => 'PT Jaya Abadi',
                'npwp' => '93.057.598.0-000.000',
                'narahubung' => 'Budi Suryadi',
                'telepon' => '0895326443576',
                'pemilik_rekening' => 'PT Jaya Abadi',
                'bank' => 'BCA',
                'no_rek' => '3476587',
                'alamat' => 'JL Raya Cibeber, Leuwiliang KM 19 Bogor 16640.',
                'level' => 'supplier',
                'email' => 'jayaabadi@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'username' => 'ribut',
                'nama' => 'Ribut',
                'narahubung' => 'Ribut',
                'telepon' => '0895326443576',
                'level' => 'dpal',
                'email' => 'dpal@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'username' => 'herry',
                'nama' => 'Herry',
                'narahubung' => 'Herry',
                'telepon' => '0895326443576',
                'email' => 'herry@gmail.com',
                'level' => 'warek',
                'password' => bcrypt('12345678'),
            ],
            [
                'username' => 'hidayatullah',
                'nama' => 'Hidayatullah',
                'narahubung' => 'hidayatullah',
                'telepon' => '0895326443576',
                'email' => 'hidayaullah@gmail.com',
                'level' => 'rektor',
                'password' => bcrypt('12345678'),
            ]
            ];

            foreach($user as $key => $value){
                User::create($value);
            }
    }
}
