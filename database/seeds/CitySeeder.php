<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'New York'],
            ['id' => 2, 'name' => 'London'],
            ['id' => 3, 'name' => 'Tokyo'],
            ['id' => 4, 'name' => 'Berlin'],
            ['id' => 5, 'name' => 'San Francisco'],
        ];

        foreach ($items as $item) {
            City::create($item);
        }
    }
}
