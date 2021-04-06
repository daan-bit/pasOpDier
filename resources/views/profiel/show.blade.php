@extends('default')

@section('title')
  Profiel van {{$oppasser->name}}
@endsection

@section('content')
    @include('profiel.components.profielCard--show')
@endsection