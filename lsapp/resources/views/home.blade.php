@extends('layouts.app')

@section('content')
<div class="container animate__animated animate__bounceInUp">
    <div class="row justify-content-center">
        <div class="">
            <div class="card mb-3">
                    <div class="card-header" >Dashboard</div>
                    <div >
                        <a href="/posts/create" class="nav-item btn btn-danger m-2">Create Post</a>
                        <h3 class="card-body">Your Blog Posts </h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <th>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info float-right">Edit</td>
                                <td> {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'DELETE','class'=>'float-right']) !!}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                    {!!Form::close()!!}</td>
                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection
