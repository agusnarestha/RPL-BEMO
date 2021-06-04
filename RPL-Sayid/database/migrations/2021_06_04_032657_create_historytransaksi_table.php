<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorytransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historytransaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipe_mobil');
            $table->string('merek');
            $table->string('model');
            $table->bigInteger('harga');
            $table->unsignedBigInteger('penjual_id')->unsigned();
            $table->foreign('penjual_id')->references('id')->on('penjual')->onDelete('cascade');
            $table->unsignedBigInteger('pembeli_id')->unsigned();
            $table->foreign('pembeli_id')->references('id')->on('pembeli')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historytransaksi');
    }
}
