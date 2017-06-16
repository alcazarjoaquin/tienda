@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="col-xs-12">
      @foreach ($shopping_cart as $product)
        {{$product->name}} {{$product->price}}
      @endforeach
    </div>
    <div class="col-xs-12">
      numero de productos {{$productSize}}
      total a pagar:{{$total}}
    </div>
    @foreach($products as $product)
    <div class="col-md-4">
      {{$total}}
      <h3>{{$product->name}}</h3>
      <h3>{{$product->price}}</h3>
      <p>{{$product->description}}</p>
      {!!Form::open(['url'=>'/shopping_carts/','method'=>'POST','class'=>'inline_block'])!!}
      <input type="hidden" name="product_id" value="{{$product->id}}">
      <input type="hidden" name="product_name" value="{{$product->name}}">
      <input type="hidden" name="product_price" value="{{$product->price}}">
      <input type="hidden" name="product_description" value="{{$product->description}}">
      <label>Cantidad:</label>
      <input type="number" name="qty" value="1">
      <br>
      <input type="submit" name="" value="Agregar al carrito" class="col-xs-12 btn btn-success">
      {!!Form::close()!!}
    </div>
    @endforeach
    <div class="col-xs-12">
        {{$products->links()}}
    </div>
  </div>
@endsection
