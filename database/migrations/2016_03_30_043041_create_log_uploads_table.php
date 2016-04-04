<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('upload_by')->unsigned()->nullable();
            $table->string('lokasi_file');
            $table->string('nama_file');
            $table->timestamps();
        });

        Schema::table('log_uploads', function (Blueprint $table) {
            $table->foreign('upload_by')
                ->references('id')
                ->on('user')
                ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('log_uploads');
    }
}
