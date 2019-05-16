<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $this->call(VoyagerDatabaseSeeder::class);

      $this->call(PagesTableSeeder::class);

      $this->call(UsersTableSeeder::class);

      $this->call(AlbumsTableSeeder::class);

      $this->call(EventsTableSeeder::class);

      $this->call(CoachesTableSeeder::class);

      $this->call(ServicesTableSeeder::class);

      $this->call(CoachServiceTableSeeder::class);

      $this->call(TrainingsTableSeeder::class);

      $this->call(PermissionRoleTableSeeder::class);

    }
}
