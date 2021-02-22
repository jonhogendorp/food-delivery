@extends('layout')
@section('content')

<section id="about" class="about">
<!-- section-->
  <section class="d-flex align-items-center">
  </section>

  <section id="why-us" class="why-us">

  <div class="container" data-aos="fade-up">
      @can('restaurant-list')
    <div class="pull-right">
        <a class="btn btn-primary mb-5" href="{{ route('restaurants.index') }}"> Back</a>
        </div>
        @endcan
        @cannot('restaurant-list')
        <div class="pull-right">
            <a class="btn btn-primary mb-5" href="{{ route('restaurant') }}"> Back</a>
            </div>

        @endcannot
    <div class="section-title">
      <h1>{{$restaurant->restaurant_name}}</h1>
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
          <button onclick="openNav()">Order Me</button>
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
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
      <a href="javascript:void(0)" onclick="closeNav()">Close</a>
    </div>

  </div>

@endsection
