@extends('layouts.app')
@section('content')
    <h1>{{$title}} The Project</h1>
    <p>
        Hi this is a group project for CSE309 Final.
    </p>
    <h4>Group members :</h4>
    <ul>
        
        <li>Shayla Sharmin Akhi</li>
        <li>Md Shakil Ahmed</li>
    </ul>
    <div class="container card-group">
        <div class="card md-3 m-3" style="max-width: 30rem;">
            <div class="card-body">
              {{-- <h5 class="card-title">Special title treatment</h5> --}}
              {{-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> --}}
            </div>
                <img src="{{ url('images/1.jpg') }}" alt="">
                <h3 class="card-header">Shayla Sharmin Akhi</h3>
        </div>
        <div class="card md-3 m-3" style="max-width: 30rem;">
            
            <div class="card-body">
              {{-- <h5 class="card-title">Special title treatment</h5> --}}
              {{-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> --}}
            </div>
                <img src="{{ url('images/1.jpg') }}" alt="">
                <h3 class="card-header">Md Shakil Ahmed</h3>
                {{-- id:1730295 --}}
        </div>

    </div>
    
@endsection