<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TableRoleSeed::class);
        $this->call(TableCategoriesSeed::class);
        $this->call(TableSubdivisionsSeed::class);
        $this->call(DatabaseCitiesSeed::class);

    }
}
