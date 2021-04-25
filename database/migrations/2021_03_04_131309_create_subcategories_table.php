<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->biginteger('catprice');
            $table->string('sub_name');
            $table->boolean('airbags')->nullable();
            $table->boolean('sun_roof')->nullable();
            $table->boolean('air_conditionning')->nullable();
            $table->boolean('abs')->nullable();
            $table->boolean('cruise_control')->nullable();
            $table->boolean('rear_sensors')->nullable();
            $table->boolean('front_sensors')->nullable();
            $table->boolean('multifunction_steering_wheel')->nullable();
            $table->boolean('start_button')->nullable();
            $table->boolean('digita_dashboard')->nullable();
            $table->boolean('usb')->nullable();
            $table->boolean('aux')->nullable();
            $table->boolean('esp')->nullable();
            $table->boolean('ebd')->nullable();
            $table->boolean('navigation')->nullable();
            $table->integer('cylinder');
            $table->integer('recommeneded_fuel');
            $table->string('moment');
            $table->string('hourse_power');
            $table->unsignedBigInteger('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('subcategories');
    }
}
