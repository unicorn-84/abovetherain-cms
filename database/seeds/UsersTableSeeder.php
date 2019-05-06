<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
  /**
   * Auto generated seed file.
   *
   * @return void
   */
  public function run()
  {
    if (User::count() == 0) {
      $role = Role::where('name', 'superadmin')->firstOrFail();

      User::create([
        'name' => 'superadmin',
        'email' => 'chagas@secencode.xyz',
        'password' => bcrypt('Su7$U48fc*G1pRp~'),
        'remember_token' => Str::random(60),
        'role_id' => $role->id,
        'avatar' => 'users/superadmin.png'
      ]);
    }
  }
}
