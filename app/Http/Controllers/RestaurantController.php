<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    public function testUser(Request $request)
    {
        dd($request->all());
    }

    public function index(){
        return view('restaurant', []);
    }

    public function show(Restaurant $result){
        $results = Restaurant::whereid($result)->first();

        return view('restaurants.show', ['result' => $result,]);
    }
}
// ['restaurant'=> $result]
