<?php

namespace Database\Seeders;

use App\models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains_data = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Rimini',
                'arrive_station' => 'Milano',
                'departure_time' => '12:00:00',
                'arrive_time' => '18:00:00',
                'train_code' => 'x1s4d1ge',
                'carriages' => 5,
                'on_time' => 1,
                'canceled' => 0,
                'type' => 'Frecciabianca',
                'highspeed' => 1,
            ],
            [
                'company' => 'Altro',
                'departure_station' => 'Torino',
                'arrive_station' => 'Milano',
                'departure_time' => '19:00:00',
                'arrive_time' => '23:00:00',
                'train_code' => 'x1s4d1ge',
                'carriages' => 7,
                'on_time' => 1,
                'canceled' => 0,
                'type' => 'Frecciarossa',
                'highspeed' => 1,
            ],
        ];

        foreach ($trains_data as $train_data) {
            # code...
            $train = new Train();
            $train->fill($train_data);

            // $train->company = $train_data['company'];
            // $train->departure_station = $train_data['departure_station'];
            // $train->arrive_station = $train_data['arrive_station'];
            // $train->departure_time = $train_data['departure_time'];
            // $train->arrive_time = $train_data['arrive_time'];
            // $train->train_code = $train_data['train_code'];
            // $train->carriages = $train_data['carriages'];
            // $train->on_time = $train_data['on_time'];
            // $train->canceled = $train_data['canceled'];
            // $train->type = $train_data['type'];
            // $train->highspeed = $train_data['highspeed'];

            $train->save();
        }
    }
}
