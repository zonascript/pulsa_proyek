<?php

use Illuminate\Database\Seeder;

class insert_jenis_kartu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jenis_kartu')->delete();

    	$role = [
    		array(
    			'id' => 1,
    			'nama_kartu' => 'Telkomsel',
    		),
    		array(
    			'id' => 2,
    			'nama_kartu' => 'Indosat',
    		)
    	];


     	DB::table('jenis_kartu')->insert($role);
    }
}
