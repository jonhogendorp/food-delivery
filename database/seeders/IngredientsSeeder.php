<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'meat',
            'products_id' => 1,
        ]);
        DB::table('ingredients')->insert([
            'name' => 'patatoes',
            'products_id' => 2,
        ]);
        DB::table('ingredients')->insert([
            'name' => 'fish',
            'products_id' => 3,
        ]);
       
    }
}
