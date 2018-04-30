@extends ('places.layout')
@section('show-places')

@foreach ($places as $place)
<p>{{$place->image}}</p>
<p>{{$place->title}}</p>
<p>{{$place->description}}</p>
@endforeach
@stop