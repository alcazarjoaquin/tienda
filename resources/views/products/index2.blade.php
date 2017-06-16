@extends('layouts.app')
@section('content')
  <div class="container">
    @foreach($products as $product)
    <div class="col-md-4">
      <h3>{{$product->name}}</h3>
      <p>{{$product->description}}</p>
      <button type="button" name="button">Agregar a carrito</button>
      <a class="col-xs-12" href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
      @include('products.delete',['product'=>$product])
    </div>
    @endforeach
    <div class="col-xs-12">
        {{$products->links()}}
    </div>

  </div>
@endsection
