@extends('default')

@section('title')
    Huisdieren
@endsection


@section('content')
<main class="u-main">
  <ul class="u-grid-12 u-grid-gap-2">
      @foreach($huisdier as $huisdier)
        @include('admin.components.verwijderCard--index')
      @endforeach
  </ul>
</main>
@endsection