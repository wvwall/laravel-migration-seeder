<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $new_holiday_object = new Holiday();
            $new_holiday_object->destination = $faker->city();
            $new_holiday_object->date = $faker->date();
            $new_holiday_object->n_person = $faker->numberBetween(1, 6);
            $new_holiday_object->price = $faker->numberBetween(500, 5000);
            $new_holiday_object->days = $faker->numberBetween(2, 15);
            $new_holiday_object->save();
        }
    }
}
