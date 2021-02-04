<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('restaurant_types_id');
            //string
            $table->string('restaurant_name', 255);
            $table->string('email')->unique();
            $table->string('street');
            $table->string('city',80);
            $table->string('postal_code');
            $table->string('phone', 15);
            $table->string('house_number_addition', 20)->nullable();
            $table->unsignedInteger('house_number');



            $table->timestamps();

             $table->foreign('restaurant_types_id')
                ->references('id')
                ->on('restaurant_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
