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
        $supplier = User::create([
                'bidangusaha_id' => '1',
                'username' => 'jayaabadi',
                'name' => 'PT Jaya Abadi',
                'npwp' => '93.057.598.0-000.000',
                'narahubung' => 'Budi Suryadi',
                'telepon' => '0895326443576',
                'bank' => 'BCA',
                'no_rek' => '3476587',
                'alamat' => 'JL Raya Cibeber, Leuwiliang KM 19 Bogor 16640.',
                'email' => 'jayaabadi@gmail.com',
                'password' => bcrypt('12345678'),
            ]);

            $supplier->assignRole('supplier');
        $dpal = User::create([
                'username' => 'dpal',
                'name' => 'DPAL',
                'narahubung' => 'dpal',
                'telepon' => '0895326443576',
                'email' => 'dpal@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            $dpal->assignRole('dpal');
        $warek = User::create([
                'username' => 'warek',
                'name' => 'WAREK II',
                'email' => 'warek@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            $warek->assignRole('warek');
        $rektor = User::create([
                'username' => 'rektor',
                'name' => 'REKTOR',
                'narahubung' => 'rektor',
                'email' => 'rektor@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            $rektor->assignRole('rektor');
            

            
    }
}
