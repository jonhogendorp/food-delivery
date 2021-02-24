<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class ShoppingController extends Controller
{
    public function put(Request $request){


       
        $restaurant = $request->input('restaurant');
        $product = $request->input('product');
        $size = $request->input('size');
        $price = floatval($request->input('price'));
        $quantity = floatval($request->input('quantity'));
        $totalprice = $price*$quantity;
       
        
       

       session()->put('order', ['restaurant' => $restaurant, 'product' => $product, 'size' => $size, 'price' => $price, 'quantity' => $quantity, 'totalprice' => $totalprice]);
       header('Location: getsession');
       
        
    }

    public function get(){

        $value = session()->get('order');
        dd($value);
    }

    public function delete(){
        session()->forget('name');
        header('Location: /home');
    }

    
}
