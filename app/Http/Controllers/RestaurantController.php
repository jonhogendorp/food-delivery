<?php

namespace App\Http\Controllers;

use App\Models\Restaurantmanage;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{

public function show(Restaurant $restaurant)
{
$restaurants = Restaurant::latest()->paginate(5);
return view('restaurants.show',['restaurant' => $restaurant])
->with('i', (request()->input('page', 1) - 1) * 5);
}
public function index()
{

    $restaurants = Restaurant::latest()->paginate(5);
    return view('restaurant',compact('restaurants'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
}



}
