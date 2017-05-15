<?php

use App\Category;
use Illuminate\Database\Seeder;

class TableCategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=array('DOCTOR','HOSPITAL','PHARMACY');

        foreach ($list as $item)

        {
            $cat = Category::firstOrNew(['name' =>$item]);
            if (!$cat->exists)
            {
                $cat->save();
            }
        }
    }
}
