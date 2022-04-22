@extends('layouts.app')
@section('content')
<br>
<a href="/posts" class="btn btn-success">Go Back</a>
<h1> {{$post -> title}} </h1>
        <div class="well">
            <p> {!!$post -> body!!}</p>
        </div>
        {{-- <hr> --}}
        <small>Written on {{$post->created_at}} by  <span class="text-info">{{$post->user->name}}</span></small>
       <hr>
        @if(!Auth::guest() && Auth::user()-> id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'DELETE','class'=>'float-right']) !!}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
@endsection