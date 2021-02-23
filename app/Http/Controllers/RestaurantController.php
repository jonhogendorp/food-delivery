<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Restaurantmanage;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    public function testUser(Request $request)
    {
        dd($request->all());
    }

    public function index(Restaurant $restaurant){

        return view('restaurants.show', ['restaurant' => $restaurant]);
    }

    
    public function show(Restaurant $restaurant){

        return view('restaurants.show', ['restaurant' => $restaurant]);
    }

public function showAll()
{
$restaurants = Restaurant::latest()->paginate(5);
return view('restaurant',compact('restaurants'))
->with('i', (request()->input('page', 1) - 1) * 5);
}

}
// ['restaurant'=> $result]
