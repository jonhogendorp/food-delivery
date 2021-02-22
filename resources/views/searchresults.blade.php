@extends('layout')
@section('content')
<!-- ======= content Section ======= -->
<section class="d-flex align-items-center">
</section>
<section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Restaurants in your Area</h2>
      <p><h3>{{$customerPostalCode}}</h3></p>
    </div>

    <div class="row">

      @forelse ($results as $result)

        <div class="col-lg-12">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span><a href="{{$result->path()}}">{{$result->restaurant_name}}</a></span>
           <p>{{$result->times->start}}</p>


          </div>
        </div>
        @empty
          <div class="col-lg-12">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>No restaurants were found in your area.</span>
            </div>




          </div>
      @endforelse
    </div>
  </div>
</section><!-- content Section -->
@endsection
