<?php

use Illuminate\Database\Seeder;

class DatabaseSpecialitiesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialities')->insert([
            'parent_id'=>'Doctors',
            'name' => '',
        ]);
    }
}
