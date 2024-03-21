<?php

namespace Database\Seeders;

use App\models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $file = fopen(__DIR__ . '/../csv/train.csv', 'r');
        while (!feof($file)) {
            var_dump(fgetcsv($file));
        }

        // $trains_data = [
        //     [
        //         'company' => 'Trenitalia',
        //         'departure_station' => 'Rimini',
        //         'arrive_station' => 'Milano',
        //         'departure_time' => '12:00:00',
        //         'arrive_time' => '18:00:00',
        //         'train_code' => 'x1s4d1ge',
        //         'carriages' => 5,
        //         'on_time' => 1,
        //         'canceled' => 0,
        //         'type' => 'Frecciabianca',
        //         'highspeed' => 1,
        //     ],
        //     [
        //         'company' => 'Altro',
        //         'departure_station' => 'Torino',
        //         'arrive_station' => 'Milano',
        //         'departure_time' => '19:00:00',
        //         'arrive_time' => '23:00:00',
        //         'train_code' => 'x1s4d1ge',
        //         'carriages' => 7,
        //         'on_time' => 1,
        //         'canceled' => 0,
        //         'type' => 'Frecciarossa',
        //         'highspeed' => 1,
        //     ],
        // ];

        // foreach ($trains_data as $train_data) {
        # code...

        for ($i = 0; $i < 100; $i++) {
            $train = new Train();
            // $train->fill($train_data);

            $train->company = $faker->company();
            $train->departure_station = $faker->address();
            $train->arrive_station = $faker->address();
            $train->departure_time = $faker->time();
            $train->arrive_time = $faker->time();
            $train->train_code = $faker->regexify('[a-z]{4}[0-9]{4}');
            $train->carriages = $faker->numberBetween(4, 10);
            // $train->on_time = $train_data['on_time'];
            // $train->canceled = $train_data['canceled'];
            // $train->type = $train_data['type'];
            // $train->highspeed = $train_data['highspeed'];

            $train->save();
            // }
        }
    }
}
