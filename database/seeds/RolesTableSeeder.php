<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
  /**
   * Auto generated seed file.
   */
  public function run()
  {

    $role = Role::firstOrNew(['name' => 'superadmin']);
    if (!$role->exists) {
      $role->fill([
        'display_name' => 'Superadmin',
      ])->save();
    }
  }
}
