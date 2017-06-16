@extends('layouts.app')
@section('content')
  {!!Form::open(['url'=>'/products/','method'=>'POST','class'=>'inline-block'])!!}
  Nombre del producto:
  {{ Form::text('name','',['class'=>'form-control'])  }}

  Descripción del producto:
  {{ Form::textarea('description','',['class'=>'form-control'])  }}

  Precio del producto:
  {{ Form::text('price','',['class'=>'form-control'])  }}

  Categoria del producto:
  {{
    Form::select('category_id',$categories,['class'=>'form-control'])
  }}
  <input type="submit" class="btn btn-success" name="" value="Guardar">
  {!! Form::close() !!}
@endsection
