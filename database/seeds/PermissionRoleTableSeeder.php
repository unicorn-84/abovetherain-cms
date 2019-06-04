<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class PermissionRoleTableSeeder extends Seeder
{
  /**
   * Auto generated seed file.
   *
   * @return void
   */
  public function run()
  {
    $role = Role::where('name', 'admin')->firstOrFail();

    $permissions = Permission::all();

    $role->permissions()->sync(
      $permissions->pluck('id')->all()
    );

    $role = Role::where('name', 'moderator')->firstOrFail();

    $permissions = Permission::all()
      ->whereNotIn('table_name', ['roles', 'users'])
      ->whereNotIn('key', ['browse_bread', 'browse_database', 'browse_media', 'browse_compass', 'add_settings', 'delete_setting', 'add_menus', 'delete_menus']);

    $role = Role::where('name', 'user')->firstOrFail();

    $permissions = Permission::all()
      ->whereNotIn('table_name', ['roles', 'users'])
      ->whereNotIn('key', ['browse_bread', 'browse_database', 'browse_compass', 'add_pages', 'add_services', 'add_trainings', 'add_events', 'add_coaches', 'add_albums', 'add_videos', 'add_settings', 'edit_settings', 'delete_settings', 'add_menus', 'delete_menus']);


    $role->permissions()->sync(
      $permissions->pluck('id')->all()
    );
  }
}
