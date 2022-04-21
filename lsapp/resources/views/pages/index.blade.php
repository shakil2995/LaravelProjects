@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore possimus, tempore repudiandae nam quis rem dicta unde id debitis! Architecto error at ratione quia illo laboriosam in, debitis placeat aliquid. </p>
    <p>
        <a href="/login" class="btn btn-info btn-lg">Login</a>
        <a href="/Register" class="btn btn-success btn-lg">Register</a>
    </p>
</div>    
@endsection