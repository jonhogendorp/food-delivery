@extends('layout')
  @section('content')

  <section id="image-header-show-restaurant">

  </section>
    <section id="restaurant-detail" class="restaurant-detail">
        <div class="container" data-aos="fade-up">
            <div class="row">
                
      
      
                <div class=" col-lg-12" data-aos="zoom-in" data-aos-delay="100" >
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <li class="col-lg-2 img">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <path id="Icon_awesome-pizza-slice" data-name="Icon awesome-pizza-slice" d="M15.515.015a3.221,3.221,0,0,0-3.45,2.356l-1.446,5.5C28.941,8.4,41.336,20.621,42.111,38.824l5.561-1.541a3.222,3.222,0,0,0,2.307-3.506A38.812,38.812,0,0,0,15.515.015ZM9.8,10.953.053,48.014a1.583,1.583,0,0,0,1.953,1.929L39.019,39.678C38.6,22.6,27,11.148,9.8,10.957Zm2.7,29.674A3.125,3.125,0,1,1,15.625,37.5,3.125,3.125,0,0,1,12.5,40.627Zm4.688-14.844a3.125,3.125,0,1,1,3.125-3.125A3.125,3.125,0,0,1,17.188,25.782ZM27.344,35.939a3.125,3.125,0,1,1,3.125-3.125A3.125,3.125,0,0,1,27.344,35.939Z" transform="translate(-0.001 0)" fill="#0cbe57"/>
                                    </svg>
                            </li>
                            <li class="col-lg-10">
                            </strong>Your shopping Basket:</strong>
                                <p>Products: <?php
                                    $quantity = session()->get('order');
                                    if($quantity == null){echo("0");}
                                    else {$totalAmount = array_sum(array_column($quantity, 'quantity'));
                                    echo($totalAmount);}?>
                                </p>
                                <p>Total Price: €<?php 
                                    $order = session()->get('order');
                                    if($order == null){echo("0");}
                                    else {$totalprice = array_sum(array_column($order, 'productTotalPrice'));
                                    echo($totalprice);}?>
                                </p>
                                <p>
                                    <button class="button" onclick="window.open('/orders.confirm')" target="_blank"><span>Confirm Order</span></button>
                                    <button class="button" onclick="window.open('/orders.show')" target="_blank"><span>Show Basket</span></button>
                                </p>
                            </li>
                    </div>
                </div>
              
            </div>
        </div>
      

  <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="restaurant-about">
            <h3>{{$restaurant->restaurant_name}}</h3>
        </div>
          @foreach ($restaurant->products as $product)


          <div class=" col-lg-12" data-aos="zoom-in" data-aos-delay="100" >
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                      <li class="col-lg-2 img">
                              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                  <path id="Icon_awesome-pizza-slice" data-name="Icon awesome-pizza-slice" d="M15.515.015a3.221,3.221,0,0,0-3.45,2.356l-1.446,5.5C28.941,8.4,41.336,20.621,42.111,38.824l5.561-1.541a3.222,3.222,0,0,0,2.307-3.506A38.812,38.812,0,0,0,15.515.015ZM9.8,10.953.053,48.014a1.583,1.583,0,0,0,1.953,1.929L39.019,39.678C38.6,22.6,27,11.148,9.8,10.957Zm2.7,29.674A3.125,3.125,0,1,1,15.625,37.5,3.125,3.125,0,0,1,12.5,40.627Zm4.688-14.844a3.125,3.125,0,1,1,3.125-3.125A3.125,3.125,0,0,1,17.188,25.782ZM27.344,35.939a3.125,3.125,0,1,1,3.125-3.125A3.125,3.125,0,0,1,27.344,35.939Z" transform="translate(-0.001 0)" fill="#0cbe57"/>
                              </svg>
                      </li>
                      <li class="col-lg-10">
                          <h5>{{$product->food_name}}</h4>
                          <p>{{$product->price}}</p>
                          <p>ingredients</p>
                          
                          

                          {{-- <p>ingredients</p> --}}
                        <button class="btn btn-primary order-button">
                            <a href="/orders/{{$product->id }}/order" class="is-link" target="_blank"> Order Me </a>
                        </button>
                      </li>
              </div>
          </div>
          @endforeach
      </div>
  </div>
  </section>

  <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    
  
    <!-- Overlay content -->
    <div class="overlay-content">
        <h1>{{$product->restaurants->restaurant_name}}</h1>
        <h2 class="ordertitle">Your order:</h2>
        <h3>{{$product->food_name}}</h3>
        <form method="GET" action="{{route('session')}}" class="orderoverlay" id="orderoverlay" name="orderoverlay">
          @csrf
          <div>
            <label for="Restaurant"></label>
          <input type="text" class="restaurant" name="restaurant" id="restaurant" value="{{$product->restaurants->restaurant_name}}" style="display: none;" required>
          </div>
          <div>
              <label for="Product"></label>
            <input type="text" class="product" name="product" id="product" value="{{$product->food_name}}" style="display: none;" required>
            </div>
            <div>
            <label for="price">Price: {{$product->price}}</label>
            <input type="text" class="price" name="price" id="price" value="{{$product->price}}" style="display: none;" required>
            </div>
            <div id="div">
            <label for="quantity"></label>
              <input type="number" value="1" name="quantity" id="quantity" max="25">
            </div>
        <br>
        <br>
            <p><button class="button is-link" type="submit">Confirm</button></p>
            
      </form>
   
    </div>
  

  @endsection



