<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('bidangusaha_id')->unsigned()->nullable();
            $table->foreign('bidangusaha_id')->references('id')->on('bidang_usahas')->onDelete('cascade');
            $table->string('username');
            $table->string('npwp')->unique()->nullable();
            $table->string('narahubung')->nullable();
            $table->string('name')->nullable();
            $table->string('telepon')->nullable();
            $table->string('bank')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('alamat')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
        // $table->dropForeign('users_bidangusaha_id_foreign');
        // $table->dropIndex('users_bidangusaha_id_index');
        // $table->dropColumn('bidangusaha_id');
    }
}
