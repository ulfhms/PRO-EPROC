<?php

namespace Database\Seeders;

use App\Models\Budjet;
use Illuminate\Database\Seeder;

class BudjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $budget = [
            [
                
                'nama_kegiatan'=>'pengadaan server untuk laboratorium',
                'status'=>'dapat di ajukan',
                'unit_kerja_pengusul'=>'Fakultas Psikologi dan Ilmu Pendidikan',
                'anggaran'=>'50000000',
                'rencana_belanja'=>'50000000',
                'sisa_anggaran'=>'0',
                // '1-12-2021',
                // '13-12-2021',
            ],
            [
                
                'nama_kegiatan'=>'Pengadaan Mesin CNC untuk Laboratorium Mesin',
                'status'=>'dapat di ajukan',
                'unit_kerja_pengusul'=>'Fakultas sains dan teknologi',
                'anggaran'=>'56000000',
                'rencana_belanja'=>'56000000',
                'sisa_anggaran'=>'0',
                // '1-12-2021',
                // '13-12-2021',
                
            ],
            [
                
                'nama_kegiatan'=>'Pengadaan Printer untuk Laboratorium Komputer',
                'status'=>'dapat di ajukan',
                'unit_kerja_pengusul'=>'Fakultas sains dan teknologi',
                'anggaran'=>'30000000',
                'rencana_belanja'=>'30000000',
                'sisa_anggaran'=>'0',
                // '1-12-2021',
                // '13-12-2021',
            ],
            [
                
                'nama_kegiatan'=>'Pengadaan Kursi untuk Rapat',
                'status'=>'dapat di ajukan',
                'unit_kerja_pengusul'=>'Fakultas sains dan teknologi',
                'anggaran'=>'10000000',
                'rencana_belanja'=>'10000000',
                'sisa_anggaran'=>'0',
                // '1-12-2021',
                // '13-12-2021',
            ],
        ];

        foreach($budget as $key => $value){
            Budjet::create($value);
        }
    }
}
