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
        $train = new Train();

        $train->company = 'Trenitalia';
        $train->departure_station = 'Rimini';
        $train->arrive_station = 'Milano';
        $train->departure_time = '12:00:00';
        $train->arrive_time = '18:00:00';
        $train->train_code = 'x1s4d1ge';
        $train->carriages = 5;
        $train->on_time = 1;
        $train->canceled = 0;
        $train->type = 'Frecciabianca';
        $train->highspeed = 1;

        $train->save();
    }
}
