<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //GENERATING DATA WITH FAKER
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_date = $faker->date('Y-m-d');
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = '13:00';
            $newTrain->arrival_time = '19:20';
            $newTrain->train_code = 'tr' . $faker->bothify('##??');
            $newTrain->carriages_number = $faker->randomDigit();
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_canceled = $faker->boolean();
            $newTrain->save();
        }


        // ADDING DATA USING AN ARRAY CREATED MANUALLY
        /* $trains = config('db.trains');

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_date = $train['departure_date'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriages_number = $train['carriages_number'];
            $newTrain->is_on_time = $train['is_on_time'];
            $newTrain->is_canceled = $train['is_canceled'];
            $newTrain->save();
        } */
    }
}
