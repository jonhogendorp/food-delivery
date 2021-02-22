@extends('layout')
    @section('content')
    {{-- <section class="d-flex align-items-center">
    </section> --}}
    <section id="image-header-show-restaurant">
    </section>
    <section id="restaurant-detail" class="restaurant-detail">
        {{-- about gedeelte --}}
        <div class="restaurant-about">
            <h4>{{$results->restaurant_name}}</h4>
            <p></p>
        </div>

    <div class="container" data-aos="fade-up">
        {{-- populaire gerechten  --}}
        <div class="row">
            @foreach ($results as $product)
            {{-- <div class="col-lg-12">
                <div class="box row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-10">

                        <h3>name product</h3>
                        <p>ingredienten</p>
                        <p>price</p>
                    </div>
                </div>
            </div> --}}
            <div class=" col-lg-12" data-aos="zoom-in" data-aos-delay="100" >
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <li class="col-lg-2 img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                    <path id="Icon_awesome-pizza-slice" data-name="Icon awesome-pizza-slice" d="M15.515.015a3.221,3.221,0,0,0-3.45,2.356l-1.446,5.5C28.941,8.4,41.336,20.621,42.111,38.824l5.561-1.541a3.222,3.222,0,0,0,2.307-3.506A38.812,38.812,0,0,0,15.515.015ZM9.8,10.953.053,48.014a1.583,1.583,0,0,0,1.953,1.929L39.019,39.678C38.6,22.6,27,11.148,9.8,10.957Zm2.7,29.674A3.125,3.125,0,1,1,15.625,37.5,3.125,3.125,0,0,1,12.5,40.627Zm4.688-14.844a3.125,3.125,0,1,1,3.125-3.125A3.125,3.125,0,0,1,17.188,25.782ZM27.344,35.939a3.125,3.125,0,1,1,3.125-3.125A3.125,3.125,0,0,1,27.344,35.939Z" transform="translate(-0.001 0)" fill="#0cbe57"/>
                                </svg>
                        </li>
                        <li class="col-lg-10">
                            <h3>name product</h3>
                            <p>ingredienten</p>
                            <p>price</p>
                        </li>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>
    @endsection
@section('content')

<section id="about" class="about">
<!-- section-->
  <section class="d-flex align-items-center">
  </section>

  <section id="why-us" class="why-us">

  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h1 class="restauranttitle">{{$restaurant->restaurant_name}}</h1>
    </div>
        @foreach ($restaurant->products as $product)
    <div class="row">
      <div class="col-lg-12">
        <div class="box" data-aos="zoom-in" data-aos-delay="100">
          <h4>{{$product->food_name}}</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus architecto eveniet adipisci voluptatum et maxime autem modi neque vel provident, veritatis id temporibus ut reiciendis rerum odit perspiciatis quia sunt.</p>
          <h4>Price:</h4>
          <p>{{$product->price}}</p>
          <br>
          
          <button onclick="openNav()" class="button is-link">Order</button>
        </div>
      </div>
    </div>  
    
      @endforeach
  </div>

      
  </section>

</section>
<div id="order" class="overlay">

  <!-- Button to close the overlay navigation -->
  

  <!-- Overlay content -->
  <div class="overlay-content">
    <strong><h1 class="ordertitle">{{$restaurant->restaurant_name}}</h1></strong>
    <h3 class="ordertitle">Your order:</h3>
    <form method="POST" action="" class="orderoverlay" id="orderoverlay" name="orderoverlay" onsubmit="return false;">
      @csrf
      <div>
        <div>
          <label for="Product"></label>
        <input type="text" class="product" name="product" id="product" value="{{$product->food_name}}" required>
        </div>
        <div>
          <label for="size"></label>
          <select name="size" id="size" class="size" required>
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
          </select>
        </div>
        <div>
        <label for="price"></label>
        <input type="text" class="price" name="price" id="price" value="{{$product->price}}" required>
        <p>{{$errors->first('product')}}{{$errors->first('size')}}{{$errors->first('price')}}</p>
        </div>
      </div>
    
    <button class="button is-link" type="submit">Confirm</button>
    <button onclick="closeNav()" class="button is-link">Close</button>
  </form>
  
  </div>

</div>
 

@endsection
