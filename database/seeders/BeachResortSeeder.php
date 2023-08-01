<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BeachResort;
use Faker\Generator as Faker;

class BeachResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) { 
            $newBeach = new BeachResort();
            $newBeach->name = $faker->name();
            $newBeach->location = $faker->city;
            $newBeach->num_umbrellas = $faker->numberBetween(1,200);
            $newBeach->num_sunbeds = $faker->numberBetween(1,200);
            $newBeach->umbrella_price = $faker->numberBetween(20,100);
            $newBeach->opening_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newBeach->closing_date = $faker->dateTimeBetween('-1 week','+1 week');
            $newBeach->has_beach_volley = $faker->randomElement(['Available','Not Available']);
            $newBeach->has_soccer_field = $faker->randomElement(['Available','Not Available']);
            $newBeach->save();
        }
    }
}
