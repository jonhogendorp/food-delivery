<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function show(Restaurant $restaurant){

        



        return view('restaurants.show', ['restaurant' => $restaurant]);
    }


}
