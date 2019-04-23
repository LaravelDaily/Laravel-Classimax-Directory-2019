<?php

use App\City;
use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 60; $i++) {
            $company = Company::create([
                'name' => $faker->company,
                'city_id' => $faker->randomElement(City::pluck('id')->toArray()),
                'address' => $faker->address,
                'description' => $faker->text($maxNbChars = 400) ,
            ]);
            $company->addMediaFromUrl('https://dummyimage.com/100x100/000/fff')->toMediaCollection();
        }
        for($i = 0; $i < 60; $i++) {
            DB::table('category_company')->insert([
                'category_id' => rand(1,8),
                'company_id' => $faker->unique()->numberBetween(1, 60)
            ]);
        }
    }
}
