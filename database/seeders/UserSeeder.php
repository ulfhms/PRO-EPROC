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
                'name' => 'PT Jaya Abadi',
                'email' => 'jayaabadi@gmail.com',
                'password' => bcrypt('12345678'),
            ]);

            $supplier->assignRole('supplier');
        $dpal = User::create([
                'name' => 'DPAL',
                'email' => 'dpal@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            $dpal->assignRole('dpal');
        $warek = User::create([
                'name' => 'WAREK II',
                'email' => 'warek@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            $warek->assignRole('warek');
        $rektor = User::create([
                'name' => 'REKTOR',
                'email' => 'rektor@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            $rektor->assignRole('rektor');
            

            
    }
}
