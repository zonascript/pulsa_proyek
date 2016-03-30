<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekapPulsasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_pulsas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jabatan');
            $table->string('nama');
            $table->string('no_hp1',15);
            $table->string('no_hp2',15);
            $table->string('jumlah_tagihan');
            $table->string('tgl_bayar');
            $table->string('bulan');
            $table->string('tahun',4);

// Jabatan
// Nama
// No HP1
// no HP2
// tagihan
// tanggal bayar
// bulan
// tahun
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
        Schema::drop('rekap_pulsas');
    }
}
