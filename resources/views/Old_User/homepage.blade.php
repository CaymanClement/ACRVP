@extends('layouts.layout')

@section('title') OCV | Home @endsection

@section('styles')
<link href="{{ asset('mdbootstrap/css/mdb.css') }}" rel="stylesheet">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
@endsection


@section('content')

<br>
 <div id="myCarousel" class="carousel slide animated flipInX" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/slide1.jpg" alt="Chania" style="width: 100%; height: 345px;">
        <div class="carousel-caption animated slideInLeft">
          <h3>Digitizing Verification</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/slide2.jpg" alt="Chania" style="width: 100%; height: 345px;">
        <div class="carousel-caption animated slideInLeft">
          <h3>We Verify!</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/slide3.jpg" alt="Flower" style="width: 100%; height: 345px;">
        <div class="carousel-caption animated slideInLeft">
          <h3>No more fake Certificates!</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<br>
<div class="panel panel-info animated slideInLeft">
  <div class="panel-heading"><h3>About Us</h3></div>
  <div class="panel-body">Cut overall expenses, reduce financial risk, and combat academic fraud.
  The Clearinghouse instantly, accurately, and securely verifies enrollment and graduation information for students of most public and private 
</div>
</div>


hhhhhhhhhhhh
@endsection