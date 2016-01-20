<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeinKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->foreign('role_user_id')
                ->references('id')
                ->on('role_user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('created_by')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('personil', function (Blueprint $table) {
            $table->foreign('jabatan_id')
                ->references('id')
                ->on('jabatan')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('jenis_kartu_id')
                ->references('id')
                ->on('jenis_kartu')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('transaksi_pulsa', function (Blueprint $table) {
            $table->foreign('id_personil')
                ->references('id')
                ->on('personil')
                ->onDelete('cascade')
                ->onUpdate('cascade');

              $table->foreign('created_by')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
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
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
}
