<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRangeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('range', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("postal_code");
            $table->unsignedBigInteger("restaurant_id")->nullable();
            $table->timestamps();

            $table->foreign('restaurant_id')
            ->references('id')
            ->on('restaurants');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('range');
    }
}
