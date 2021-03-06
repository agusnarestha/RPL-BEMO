<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipe_mobil');
            $table->string('merek');
            $table->string('model');
            $table->string('gambar');
            $table->string('bahan_bakar');
            $table->text('desc');
            $table->bigInteger('harga');
            $table->string('tahun');
            $table->unsignedBigInteger('penjual_id')->unsigned();
            $table->foreign('penjual_id')->references('id')->on('penjual')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobil');
    }
}
