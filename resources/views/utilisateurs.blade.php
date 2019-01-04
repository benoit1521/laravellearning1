@extends('layout')
@section('contenu')

@foreach ($utilisateurs as $user)
  
    <p>This is user {{ $user->email }}</p>
@endforeach

@endsection