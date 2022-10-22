<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BankSeeder::class,
            BidangUsahaSeeder::class,
            AkunSeeder::class,
            BudjetSeeder::class,
            PengadaanSeeder::class,

        ]);
        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
