<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'bidangusaha_id' => 1,
            'bank_id' => 1,
            'user_id' => 1,
            'nama_supplier' => 'PT Jaya Abadi',
            'npwp' => '93.057.598.0-000.000',
            'narahubung' => 'Budi Suryadi',
            'telepon' => '0895326443576',
            'no_rek' => '3476587',
            'alamat' => 'JL Raya Cibeber, Leuwiliang KM 19 Bogor 16640.',
        ]);

        Supplier::create([
            'user_id' => 2,
            'nama_supplier' => 'DPAL',
            'narahubung' => 'dpal',
            'telepon' => '0895326443576',
        ]);

        Supplier::create([
            'user_id' => 3,
            'nama_supplier' => 'WAREK II',
        ]);

        Supplier::create([
            'user_id' => 4,
            'nama_supplier' => 'REKTOR',
        ]);
    }
}
