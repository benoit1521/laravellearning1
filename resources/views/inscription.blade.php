@extends('layout')

@section('contenu')
    <form action="/inscription" method="post">
    {{ csrf_field() }}

        <input type="email" name="email" placeholder="Email" class="form-control col-3">
        <input type="password" name="password" placeholder="Mot de passe"class="form-control col-3">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"class="form-control col-3">
        <input type="number" name="age" placeholder="Age"class="form-control col-3">
        <input type="submit" value="M'inscrire" class="btn btn-primary">
    </form>
@endsection