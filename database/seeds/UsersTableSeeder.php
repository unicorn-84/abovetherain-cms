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
      $role = Role::where('name', 'user')->firstOrFail();

      User::create([
        'name' => 'User',
        'email' => 'user@user.com',
        'password' => bcrypt('user'),
        'remember_token' => Str::random(60),
        'role_id' => $role->id,
//        'avatar' => 'users/admin.png'
      ]);
    }
  }
}
