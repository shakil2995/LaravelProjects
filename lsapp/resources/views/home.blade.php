@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card mb-3">
                    <div class="card-header" >Dashboard</div>
                    <div >
                        <a href="/posts/create" class="nav-list btn btn-primary">Create Post</a>
                        <h3 class="card-body">Your Blog Posts </h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <th>{{$post->title}}</th>
                                <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</th>
                                <th></th>
                            </tr>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection
