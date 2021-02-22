@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb m-5">
<div class="pull-left">
<h2> Show Product</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Food Name:</strong>
{{ $product->food_name }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Size:</strong>
{{ $product->size }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Price:</strong>
    {{ $product->price }}
    </div>
    </div>
</div>
@endsection
<p class="text-center text-primary"><small>Tutorial by rscoder.com</small></p>
