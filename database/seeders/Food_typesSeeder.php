<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Food_typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_types')->insert([
            'name' => 'Exotic',
        ]);

        DB::table('food_types')->insert([
            'name' => 'Dutch',
        ]);

        DB::table('food_types')->insert([
            'name' => 'Fish',
        ]);
    }
}
