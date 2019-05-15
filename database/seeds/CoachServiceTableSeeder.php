<?php

use Illuminate\Database\Seeder;
use App\Coach;
use App\Service;

class CoachServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coaches = Coach::all();
        $services = Service::count();

        $coaches->each(function($item, $key) {
          for ($i = 1; $i <= rand(1, 4); $i += 1) {
            $item->services()->attach($i);
          }
        });
    }
}
