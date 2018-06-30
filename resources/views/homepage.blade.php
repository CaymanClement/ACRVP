@extends('layouts.admin')

@section('title') ACRVP | Home @endsection

@section('styles')
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
@endsection


@section('content')

@section('menu_li')
                    <li class="active">
                    <a href="/">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp &nbsp Home
                        </a>
                    </li>

                    <li>
                        <a href="/upload">
                            <span class="glyphicon glyphicon-tasks"></span>&nbsp &nbsp Search Certificate
              
                        </a>
                    </li>

                    <li>
                        <a href="/certificates">
                            <span class="glyphicon glyphicon-tasks"></span>&nbsp &nbsp My Search Records
              
                        </a>
                    </li>


                    <li>
                        <a href="/messages">
                            <span class="glyphicon glyphicon-comment"></span> &nbsp &nbsp Messages <br>
               
                        </a>
                    </li>  
                    <li>
                        <a href="/profile">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Profile
                          
                        </a>
                    </li>    
                    <li>
                        <a href="/about">
                            <span class="glyphicon glyphicon-tower"></span>&nbsp &nbsp About Us
                   
                        </a>
                    </li>

                
@endsection


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
        <img src="images/slide1.jpg" alt="Chania" style="width: 100%; height: 270px;">
        <div class="carousel-caption animated slideInLeft">
          <h3>Digitizing Verification</h3>
          <p>The platform enables you to Verify Certificate Record Online.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/slide2.jpg" alt="Chania" style="width: 100%; height: 270px;">
        <div class="carousel-caption animated slideInLeft">
          <h3>We Verify!</h3>
          <p>We verify certificate records delivered to every learning institution</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/slide3.jpg" alt="Flower" style="width: 100%; height: 270px;">
        <div class="carousel-caption animated slideInLeft">
          <h3>No more fake Certificates Record</h3>
          <p>The system manage andreduce the risks of using fake certificates records</p>
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
<div class="col-md-12">
  @foreach($anno as $anno)
                            <div class="card animated slideInLeft">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">{{ $anno->title }}</h4>
                                </div>
                                <div class="card-content">
                                  <p>{{ $anno->contents }}</p>
                                  <p>Date: {{ $anno->created_at }}</p>
                                  </div>
                                </div>
@endforeach

<div>
  <br><br><br>.
</div>

@endsection