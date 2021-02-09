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
            'name' => 'cheese',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'tomato sauce',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'salami',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'ham',
        ]);
    }
}
