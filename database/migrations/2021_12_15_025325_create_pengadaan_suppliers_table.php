<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengadaanSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadaan_suppliers', function (Blueprint $table) {
            $table->id();
            $table->integer('pengadaan_id');
            $table->foreign('pengadaan_id')->references('id')->on('pengadaans')->onDelete('cascade');
            $table->integer('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->string('status_supplier')->unsigned()->nullable();
            $table->string('proposal')->unsigned()->nullable();
            $table->integer('harga_penawaran')->unsigned()->nullable();
            $table->integer('harga_terkoreksi')->unsigned()->nullable();
            $table->text('dpal_ke_supplier')->unsigned()->nullable();
            $table->text('supplier_ke_dpal')->unsigned()->nullable();
            $table->text('alasan_penolakan')->unsigned()->nullable();
            $table->text('bukti_tf')->unsigned()->nullable();
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
        Schema::dropIfExists('pengadaan_suppliers');
    }
}
