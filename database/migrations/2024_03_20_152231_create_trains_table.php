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
            $table->string('departure station');
            $table->string('arrive station');

            // $table->boolean('highspeed');

            $table->time('departure time');
            $table->time('arrive time');
            $table->string('train code', 8);
            $table->tinyInteger('carriages');
            $table->boolean('on time');
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
