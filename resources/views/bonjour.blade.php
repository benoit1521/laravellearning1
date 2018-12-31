<!-- <h1>Bonjour <?php echo request('nom') ?></h1> -->

<!-- <h1>Bonjour {{ request('nom') }}</h1> -->

<!-- @include('header') -->

@extends('layout')

@section('contenu')
<div class="title m-b-md">
<h1>Bonjour {{ $prenom }}</h1>
</div>
@endsection

<!-- @include('footer') -->
