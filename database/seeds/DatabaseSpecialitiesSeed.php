<?php

use App\Speciality;
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
        $doc = array('Dentist', 'Gynecologist', 'Pediatrician', 'General practitioner', 'Dermatologist', 'Allergist', 'Diabetologist', 'Ophthalmologist', 'Psychologist', 'Gastroenterologist');
        $hos = array('Public Hospital', 'Private Hospital', 'Military Hospital');
        $pha = array('Hospital Pharmacy', 'Public Pharmacy', 'Veterinary Pharmacy', 'Military Pharmacy');
        $list = array('1' => $doc, '2' => $hos, '3' => $pha);

        foreach ($list as $k => $data)
            foreach ($data as $item) {
                $spec = Speciality::firstOrNew(['name' => $item, 'category_id' => $k]);
                if (!$spec->exists) {
                    $spec->save();
                }
            }
    }
}

