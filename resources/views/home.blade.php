@extends('layout')
@section('content')

<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <h1>Welcome to <span>Foodies</span></h1>
        <h2>Delivering great food for more than 18 years!</h2>

        <div>
          <form method="post" action="{{route('searchresults')}}" class="customerPostalCode" id="customerPostalCode" name="customerPostalCode">
            @csrf
            <div>
            <input type="text" class="customerPostalCode" name="customerPostalCode" id="customerPostalCode" value="9712AX" required>
            <button class="button is-link" type="submit">Submit</button>
            <p>{{$errors->first('customerPostalCode')}}</p>
            </div>
          </form>
        </div>
        
      </div>
      

    </div>
  </div>
</section>


@endsection
