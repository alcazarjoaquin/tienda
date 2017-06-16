@extends('layouts.app')
@section('content')
  {!!Form::open(['url'=>'/products/'.$product->id,'method'=>'PATCH','class'=>'inline-block'])!!}
  Nombre del producto:
  {{ Form::text('name',$product->name,['class'=>'form-control'])  }}

  Descripción del productooo:
  {{ Form::textarea('description',$product->description,['class'=>'form-control'])  }}

  Precio del producto:
  {{ Form::text('price',$product->price,['class'=>'form-control'])  }}

  Categoria del producto:
  {{
    Form::select('category_id',$categories,['class'=>'form-control'])
  }}
  <input type="submit" class="btn btn-success" name="" value="Guardar">
  {!! Form::close() !!}
@endsection
