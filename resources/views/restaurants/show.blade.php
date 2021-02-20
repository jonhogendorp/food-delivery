@extends('layout')
@section('content')

<section id="about" class="about">
<!-- section-->
  <section class="d-flex align-items-center">
  </section>

  <section id="why-us" class="why-us">

  <div class="container" data-aos="fade-up">

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
          <p><button class="popup2_open">Order Me</button></p>
        </div>
      </div>
    </div>  
    
      @endforeach
  </div>

      
  </section>

</section>
<section id="popup2">
  <h2>My popup 2</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, eos, accusamus delectus harum nostrum fugiat quas tempora excepturi nobis incidunt quisquam facilis, atque ullam. Quidem animi dolorem quasi facere suscipit.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, eos, accusamus delectus harum nostrum fugiat quas tempora excepturi nobis incidunt quisquam facilis, atque ullam. Quidem animi dolorem quasi facere suscipit.</p>
</section>
@endsection