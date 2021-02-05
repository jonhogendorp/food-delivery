<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'food_type_id' => 1,
            'food_name' => 'pizza',
            'size' => 'large',
            'price' => 7.50,

        ]);
        DB::table('products')->insert([
            'food_type_id' => 2,
            'food_name' => 'hamburger',
            'size' => 'large',
            'price' => 5.50,

        ]);
        DB::table('products')->insert([
            'food_type_id' => 3,
            'food_name' => 'spaghetti',
            'size' => 'large',
            'price' => 6.50,

        ]);

    }
}
