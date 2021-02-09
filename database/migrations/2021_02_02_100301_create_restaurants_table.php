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
<<<<<<< HEAD
            $table->unsignedBigInteger('restaurant_type_id')->unsigned()->nullable();
        
=======
            $table->unsignedBigInteger('restaurant_types_id')->nullable();
            //string
>>>>>>> ac47bd85ad6efa2c0f792c80f2a56a7ef0d9f702
            $table->string('restaurant_name', 255);
            $table->string('email')->unique();
            $table->string('street');
            $table->unsignedInteger('house_number');
            $table->string('house_number_addition', 20)->nullable();
            $table->string('postal_code');
            $table->string('city',80);
            $table->string('phone', 15);
            $table->timestamps();

            $table->foreign('restaurant_type_id')
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
