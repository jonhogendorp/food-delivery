<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class ShoppingController extends Controller
{
    public function put(Request $request){


       
        $restaurant = $request->input('restaurant');
        $product = $request->input('product');
        $size = $request->input('size');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        

        
    
       session()->put('order', ['restaurant' => $restaurant, 'product' => $product, 'size' => $size, 'price' => $price, 'quantity' => $quantity]);
       header('Location: getsession');
       
        
    }

    public function get(){

        $value = session()->get('order');
        dd($value);
    }

    public function delete(){
        session()->forget('name');
        header('Location: getsession');
    }

    
}
