@extends('layouts.app')
@section('content')
<br>
<a href="/posts" class="btn btn-success">Go Back</a>
<h1> {{$post -> title}} </h1>
        <div class="well">
            <p> {!!$post -> body!!}</p>
        </div>
        <small>Written on {{$post->created_at}}</small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
@endsection