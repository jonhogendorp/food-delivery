@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb m-5">
<div class="pull-left">
<h2>Products Management</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered" style="color: black">
<tr>
<th>No</th>
<th>Food Name</th>
<th>Size</th>
<th>Price</th>
<th width="280px">Action</th>
</tr>
@foreach ($products as $key => $product)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $product->food_name }}</td>
<td>{{ $product->size }}</td>
<td>{{ $product->price }}</td>
<td>
{{-- @if(!empty($product->getRoleNames()))
@foreach($product->getRoleNames() as $v)
<label class="badge badge-success">{{ $v }}</label>
@endforeach
@endif --}}
</td>
<td>
<a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
{!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</td>
</tr>
@endforeach
</table>
{!! $products->render() !!}
<p class="text-center text-primary"><small>Tutorial by rscoder.com</small></p>
@endsection
