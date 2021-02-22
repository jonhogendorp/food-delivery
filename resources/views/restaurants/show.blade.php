@extends('layout')
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