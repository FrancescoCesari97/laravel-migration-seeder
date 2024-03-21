<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company');
            $table->string('departure_station');
            $table->string('arrive_station');

            // $table->boolean('highspeed');

            $table->time('departure_time');
            $table->time('arrive_time');
            $table->string('train_code', 8);
            $table->tinyInteger('carriages');
            $table->boolean('on_time');
            $table->boolean('canceled');
            $table->enum('type', ['Regionale', 'Frecciarossa', 'Frecciabianca']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
