@extends('default')

@section('title')
    Huisdieren
@endsection


@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($huisdier as $huisdier)
      @include('huisdier.components.huisdierCard--index')
    @endforeach
</ul>
@endsection