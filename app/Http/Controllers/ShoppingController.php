<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
class ShoppingController extends Controller
{
        public function put(Request $request){

        $restaurant = $request->input('restaurant');
        $product = $request->input('product');
        $size = $request->input('size');
        $price = floatval($request->input('price'));
        $quantity = floatval($request->input('quantity'));
        $productTotalPrice = $price*$quantity;
        $restaurantid = DB::table('products')->where('food_name', $product)->pluck('restaurant_id');
        $url = $restaurantid->all()[0];
        
       
       if($request->session()->has('order')){
        session()->push('order', ['restaurant' => $restaurant, 'product' => $product, 'size' => $size, 'price' => $price, 'quantity' => $quantity, 'productTotalPrice' => $productTotalPrice]);
        
        // $total = session()->get('order');
        // $totalprice = array_sum(array_column($total, 'productTotalPrice'));
        

        // session()->push('order.totalprice',$totalprice);
        
        

        header('Location: restaurants/'.$url);
       

       }
       
       else{
        $_SESSION['order'] = array();    
        session()->push('order', ['restaurant' => $restaurant, 'product' => $product, 'size' => $size, 'price' => $price, 'quantity' => $quantity, 'productTotalPrice' => $productTotalPrice]);
        
        
        // $total = session()->get('order');
        // $totalprice = array_sum(array_column($total, 'productTotalPrice'));
        
        // session()->push('order.totalprice',$totalprice);

        
        header('Location: restaurants/'.$url);
       }
        
    }

    public function purchase(Request $request)
    {
        
        return view('orders.order');

    }


   

    public function get(){

        $value = session()->get('order');
        dd($value);
    }

    public function delete(){
        session()->forget('order');
        header('Location: /home');
    }

    public function order($id){

        $products = Product::find($id)->with('restaurants:id,restaurant_name')->get();
        
        $product =  $products->find($id);
       
        
       return view('orders.order',compact('product'));
    }

    
}



