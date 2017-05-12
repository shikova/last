<?php

use App\Role;
use Illuminate\Database\Seeder;

class TableRoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Administrator',
            ])->save();
        }
        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Normal User',
            ])->save();
        }
        $role = Role::firstOrNew(['name' => 'professional ']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Professional User',
            ])->save();
        }
    }
}
