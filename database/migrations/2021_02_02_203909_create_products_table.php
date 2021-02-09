<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD
            $table->unsignedBigInteger('food_type_id') ->nullable();
            $table->unsignedBigInteger('ingredients_type_id') ->nullable();
            $table->unsignedBigInteger('restaurant_id')->nullable();
=======
            $table->unsignedBigInteger('food_type_id')->nullable();
            $table->unsignedBigInteger('restaurant_id')->nullable();

>>>>>>> ac47bd85ad6efa2c0f792c80f2a56a7ef0d9f702
            $table->string('food_name');
            $table->enum('size', ['large', 'medium', 'small']);
            $table->decimal('price', );
            $table->timestamps();

            $table->foreign('food_type_id')
            ->references('id')
            ->on('food_types');

            $table->foreign('ingredients_type_id')
            ->references('id')
            ->on('ingredients');

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
        Schema::dropIfExists('products');
    }
}
