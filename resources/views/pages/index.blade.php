@extends('layouts.app')
@section('content')

<div class="jumbotron jumbotron-fluid text-center">
<h1>{{$title}}</h1>
     <p>Welcome to Heat Food Ordering System</p>
     <p> This is HeatFOS registering system.! Welcome enjoy the moments of food</p>
     <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-dark btn-lg" href="/register" role="button">Register</a>
</div>
  @endsection