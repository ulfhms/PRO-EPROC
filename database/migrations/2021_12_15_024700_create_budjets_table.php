<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budjets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('status');
            $table->integer('anggaran');
            $table->integer('rencana_belanja');
            $table->integer('sisa_anggaran');
            $table->date('waktu_mulai');
            $table->date('waktu_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budjets');
    }
}
