@extends('layouts.app')
@section('content')

    <div class="animate__animated animate__bounceInRight">
      <h1>{{$title}} The Project</h1>
      <p>
        <h6>Hi, this is a group project for CSE309 Final.</h6>
        <span style="color:rgb(44, 44, 44)">It is a fully functional blogging website with full user Authentication system , Crud Functionality and Access Control.
        We have used Laravel Framework for backend.For front end we have used bootstrap and blade templating engine. </span>
    </p>
    <h4>Group members :</h4>
    </div>

    <div class="card-group d-flex justify-content-around ">
        <div class="card md-3 m-2 border border-success rounded animate__animated animate__bounceInLeft" style="max-width: 30rem;">
            <div class="card-body">
            </div>
                <img src="{{ url('images/akhi.jpeg')}}" style="max-width: 40rem;" alt="">
                <h3 class="card-header">Shayla Sharmin Akhi <br><span style="font-size:.6em;"> id:1631127 </span></h3>
        </div>
        <div class="card md-3 m-2 border border-success rounded animate__animated animate__bounceInRight" style="max-width: 30rem;">
            <div class="card-body">
            </div>
                <img src="{{ url('images/1.jpg')}}" style="max-width: 40rem;" alt="">
                <h3 class="card-header">Md Shakil Ahmed <br><span style="font-size:.6em;"> id:1730295 </span></h3>
        </div>
        </div> 

@endsection