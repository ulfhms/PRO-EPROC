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
            $table->string('nama_kegiatan')->unsigned()->nullable();
            $table->string('status')->unsigned()->nullable();
            $table->string('unit_kerja_pengusul')->unsigned()->nullable();
            $table->integer('anggaran')->unsigned()->nullable();
            $table->integer('rencana_belanja')->unsigned()->nullable();
            $table->integer('sisa_anggaran')->unsigned()->nullable();
            $table->date('waktu_mulai')->unsigned()->nullable();
            $table->date('waktu_selesai')->unsigned()->nullable();
            $table->text('uraian')->unsigned()->nullable();
            $table->string('bukti_tf')->unsigned()->nullable();
            $table->string('proposal_pengadaan')->unsigned()->nullable();
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
