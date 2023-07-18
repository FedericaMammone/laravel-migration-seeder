<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('railways', function (Blueprint $table) {
            $table->id();

            $table->string('company');
            $table->string('start_station');
            $table->string('end_station');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code')->unique();
            $table->integer('carriage_number');
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);


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
        Schema::dropIfExists('railways');
    }
};
