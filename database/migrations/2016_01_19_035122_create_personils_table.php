<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_personil',100);
            $table->integer('jabatan_id')->unsigned()->nullable();
            $table->string('no_hp_telkomsel',15)->nullable();
            $table->string('no_hp_indosat',15)->nullable();
            // $table->integer('jenis_kartu_id')->unsigned()->nullable();
            $table->date('jatuh_tempo')->nullable();
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
        Schema::drop('personil');
    }
}
