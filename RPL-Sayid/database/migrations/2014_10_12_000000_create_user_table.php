<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_ktp');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('no_hp');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->integer('saldo');
            $table->boolean('isPembeli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
