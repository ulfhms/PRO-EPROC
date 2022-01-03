<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->integer('bidangusaha_id')->unsigned();
            $table->foreign('bidangusaha_id')->references('id')->on('bidang_usahas')->onDelete('cascade');
            $table->integer('bank_id')->unsigned();
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('npwp')->unique()->nullable();
            $table->string('narahubung')->nullable();
            $table->string('nama_supplier')->nullable();
            $table->string('telepon')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('alamat')->nullable();
            $table->string('logo_supplier')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
