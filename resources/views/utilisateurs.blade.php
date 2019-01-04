@extends('layout')
@section('contenu')

<h2>Les utilisateurs agés de plus de {{$age}} ans sont : </h2>

@foreach ($utilisateurs as $user)  
    <p>{{ $user->email }}</p>
@endforeach

@endsection