<?php

use Illuminate\Database\Seeder;

class insert_role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role_user')->delete();

    	$role = [
    		array(
    			'id' => 1,
    			'nama_role' => 'Administrator',
    		),
    		array(
    			'id' => 2,
    			'nama_role' => 'Admin AFIS',
    		),
			array(
    			'id' => 3,
    			'nama_role' => 'Manager AFIS',
    		),
    		array(
    			'id' => 4,
    			'nama_role' => 'SM AFIS',
    		)
    	];


     	DB::table('role_user')->insert($role);
    }
}
