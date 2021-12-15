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
            $table->foreignId('pengadaan_id')->constrained('pengadaans');
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->primary(['pengadaan_id','supplier_id']);
            $table->string('status');
            $table->string('proposal');
            $table->integer('harga_penawaran');
            $table->integer('harga_terkoreksi');
            $table->integer('dpal_ke_supplier');
            $table->integer('supplier_ke_dpal');
            $table->integer('alasan_penolakan');
            $table->integer('bukti_tf');
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
