{!!Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE','class'=>'inline-block'])!!}
<input type="submit" name="" value="Delete" class="btn btn-link red-text no-padding no-margin no-transform">
{!! Form::close() !!}