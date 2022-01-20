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
                'username' => 'jayaabadi',
                'name' => 'PT Jaya Abadi',
                'email' => 'jayaabadi@gmail.com',
                'level' => 'supplier',
                'password' => bcrypt('12345678')
            ]
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
