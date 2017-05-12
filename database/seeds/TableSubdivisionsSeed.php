<?php

use App\Subdivision;
use Illuminate\Database\Seeder;

class TableSubdivisionsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=array('Agadir-Ida Ou Tanane','Prefecture Chtouka-Aït Baha','Province Inezgane-Aït Melloul', 'Prefecture Taroudannt', 'Province Tata', 'Province Tiznit Province');
        foreach ($list as $item)

        {
        $cat = Subdivision::firstOrNew(['name' =>$item]);
        if (!$cat->exists)
        {
            $cat->save();

        }
    }
    }
}
