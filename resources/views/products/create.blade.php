@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb m-5">
<div class="pull-left">
<h2>Add New Product</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('products.store') }}" method="POST">
@csrf
<div class="row" style="color: black">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Food Name:</strong>
<input type="text" name="food_name" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Size:</strong>
<textarea class="form-control" style="height:150px" name="size" placeholder="Detail"></textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Price:</strong>
    <textarea class="form-control" style="height:150px" name="price" placeholder="Detail"></textarea>
    </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
<p class="text-center text-primary"><small>Tutorial by rscoder.com</small></p>
@endsection
