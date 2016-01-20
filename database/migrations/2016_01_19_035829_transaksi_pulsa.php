<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaksiPulsa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pulsa', function (Blueprint $table) {
            $table->increments('id');
            $table->double('pemakaian');
            $table->date('pemakaian_bulan');
            $table->date('tanggal_bayar');
            $table->integer('id_personil')->unsigned()->nullable();
            $table->integer('created_by')->unsigned()->nullable();
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
        Schema::drop('transaksi_pulsa');
    }
}
