@extends('default')

@section('title')
    Blokkeer gebruiker
@endsection


@section('content')
    @include('admin.components.gebruikerCardHeader--edit')
    @include('admin.components.gebruikerCard--edit')
@endsection