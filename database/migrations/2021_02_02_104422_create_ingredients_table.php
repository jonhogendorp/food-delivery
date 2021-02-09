<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD:database/migrations/2021_02_02_104422_create_ingredients_table.php
            
=======
            $table->unsignedBigInteger("products_id")->nullable();
>>>>>>> ac47bd85ad6efa2c0f792c80f2a56a7ef0d9f702:database/migrations/2021_02_03_104422_create_ingredients_table.php
            $table->string('name');
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
        Schema::dropIfExists('ingredients');
    }
}
