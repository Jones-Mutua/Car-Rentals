<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id');
            $table->string('brand');
            $table->mediumText('images')->nullable();
            $table->string('model');
            $table->string('mileage');
            $table->string('transmission');
            $table->string('seats');
            $table->string('luggage')->nullable();
            $table->string('fuel');
            $table->string('description');

            $table->integer('price');
            $table->string('year');
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
        Schema::dropIfExists('cars');
    }
}
