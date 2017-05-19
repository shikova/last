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
        $spec = array('Dentist', 'Gynecologist', 'Pediatrician', 'General practitioner', 'Dermatologist', 'Allergist', 'Diabetologist', 'Ophthalmologist', 'Psychologist', 'Gastroenterologist');

            foreach ($spec as $item) {
                $spec = Speciality::firstOrNew(['name' => $item]);
                if (!$spec->exists) {
                    $spec->save();
                }
            }
    }
}

