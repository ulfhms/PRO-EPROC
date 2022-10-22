<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
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
                'username' => 'warek',
               'name'=>'warek',
               'email'=>'warek@gmail.com',
                'level'=>'warek',
               'password'=> bcrypt('12345678'),
            ],
            [
                'username' => 'rektor',
               'name'=>'rektor',
               'email'=>'rektor@gmail.com',
                'level'=>'rektor',
               'password'=> bcrypt('12345678'),
            ],
            [
                'username' => 'dpal',
               'name'=>'dpal',
               'email'=>'dpal@gmail.com',
                'level'=>'dpal',
               'password'=> bcrypt('12345678'),
            ],
            [
                'username' => 'supplier',
               'name'=>'supplier',
               'email'=>'supplier@gmail.com',
                'level'=>'supplier',
               'password'=> bcrypt('12345678'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
