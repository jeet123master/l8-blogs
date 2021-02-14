@extends('layouts.frontend.app')

@section('title')
@section('content')

<div class="container-fluid">

    <div id="demo" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="center-block" src="{{asset('images/logo.png')}}" alt="Los Angeles">
            </div>
            <div class="carousel-item">
              <img src="{{asset('images/logo.png')}}" alt="Chicago">
            </div>
            <div class="carousel-item">
              <img src="{{asset('images/logo.png')}}" alt="New York">
            </div>
        </div>

          <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon alert-dark"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
    </div>

    <div>
        <h2>All posts</h2>
    </div>

    <div>
        <h2>jlj</h2>
    </div>
    
</div>



<style>
  /* Make the image fully responsive */
  .carousel-inner img {
     width: 100%;
     height: 400px;
     max-height: 400px;
     margin: auto; 
     display: block;
  }
  .carousel-item{
    
  }
  </style>
@endsection