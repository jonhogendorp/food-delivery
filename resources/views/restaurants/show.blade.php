@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb m-5">
<div class="pull-left">
<h2> Show Product</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('restaurants.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Restaurant Name:</strong>
{{ $restaurant->restaurant_name }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Restaurant email:</strong>
{{ $restaurant->email }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Restaurant phone:</strong>
    {{ $restaurant->phone }}
    </div>
    </div>
</div>
@endsection
<p class="text-center text-primary"><small>Tutorial by rscoder.com</small></p>
