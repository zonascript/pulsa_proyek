<?php

use Illuminate\Database\Seeder;

class insert_jabatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
        DB::table('jabatan')->delete();
        $query = "INSERT INTO jabatan (nama_jabatan) VALUES ('SM Procurement'),
('SM HR & General Affair'),
('SM Logistic & Warehousing'),
('SM Project Control & Risk Mngt'),
('SM Accounting, Finance & Information System'),
('SM Mechanical Engineering'),
('SM Engineering Sipil'),
('SM Engineering Prosess'),
('SM Engineering  Mecanical  Staff'),
('SM Engineering Mechanical Staff'),
('Asisten Ahli Madya'),
('Asisten Ahli Madya'),
('SM Safety, Health, Environment & Security'),
('SM Offsite Mining'),
('Manager Equip & Mat Procurement'),
('Manager Serv Proc & EMKL'),
('Manager Warehousing'),
('Manager General Affair'),
('Manager Information System'),
('Manager Finance & Accounting'),
('M Engineering Mechanical Staff'),
('Manager Engineering Area 1'),
('Manager Engineering Process'),
('Manager Engineering Area 1'),
('Manager Engineering Area 2'),
('Manager Engineering Area 2'),
('Manager Civil Engineering'),
('Manager Engineering Area 2'),
('Manager Engineering Area 3'),
('Manager Engineering Area 4'),
('Manager Area I'),
('Manager Area II'),
('Manager Area III'),
('Manager Area IV'),
('Manager Area V'),
('Mechanical Manager '),
('Staff Logistic and Warehousing'),
('Staff SHE & Security'),
('Staff Logistic & Warehousing'),
('Manager Security'),
('Staff Construction')";
        DB::insert($query);
    }
}
