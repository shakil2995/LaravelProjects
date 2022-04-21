@extends('layouts.app')
@section('content')
<h1> Posts </h1>
@if(count($posts)>0)
    @foreach($posts as $post)
        <div class="card text-dark bg-light mb-3">
            <div class="card-body" >
                <h3 class="card-title"><a class="" href="/posts/{{$post->id}}">{{$post -> title}}</a></h3>
                {{-- <p class="card-text">{!!$post -> body!!}</p> --}}
                <small>Written on {{$post->created_at}}</small>
            </div>
        </div>
    @endforeach
    <br>
    {{$posts->links('pagination::bootstrap-4')}}
    <br>
@else
    <p>No posts found </p>
@endif
@endsection
