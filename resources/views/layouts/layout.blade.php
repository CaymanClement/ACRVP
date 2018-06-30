<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap3/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap3/js/jquery3.js') }}"></script>
    <link href="{{ asset('BS3/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{ asset('BS3/assets/fonts/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('BS3/assets/fonts/MaterialIcons.css') }}" rel='stylesheet'>
    
    @yield('styles')
</head>



<body style="background:url(images/bg.jpg); background-size:cover;">
<header>
<nav class="navbar navbar-default navbar-fixed-top" style="opacity:0.9;">
<div class="container-fluid">
 
 <ul class="nav navbar-nav navbar-left">
 <li> <a href="/" class="nav-link"> <img src="images/ACVP.PNG" height="40px" width="140px"></a></li>
 </ul>


 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Messages</a></li>

      <li><a class="nav-link" href="/profile">
        @if (Auth::check())
        {{ Auth::User()->first_name }} &nbsp {{ Auth::User()->last_name }}
        @else

        @endif
      </a></li>
      <li><a class="nav-link" href="/logout">
           &nbsp <span class="glyphicon glyphicon-log-out"></span>Logout</a>

      </li>

    </ul>

</div>

<nav class="navbar navbar-inverse" style="opacity:0.9;">
<div class="container">
<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-center">
        <li><a class="nav-link" href="/">Home</a></li>
        <li><a class="nav-link" href="/upload">Upload Certificate</a></li>
        <li><a class="nav-link" href="/certificates">My Certificates</a></li>
        <li><a class="nav-link" href="/profile">Profile</a></li>
        <li><a class="nav-link" href="/about">About Us</a></li>
    </ul>
</div>
</div>
</nav>
</header>


<!-- oooooooooooooooooooooooooooooooooooooooo double 4 spacing ooooooooooooooooooooooooooooooooooooooo -->

<nav class="navbar navbar-default" style="opacity:0;">
<div class="container-fluid">
 
 <ul class="nav navbar-nav navbar-left">
 <li> <a class="nav-link">
    <form>
      <div class="input-group">
        <input type="text" class="form-control" style="opacity:0.9; height: 30px;" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-primary" style="opacity:0.9; height: 30px;" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </a></li>
 </ul>


 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Messages</a></li>

      <li><a class="nav-link" href="#"></a></li>
      <li><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
           &nbsp <span class="glyphicon glyphicon-log-out"></span>Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}</form>
      </li>

    </ul>

</div>



<nav class="navbar navbar-inverse" style="opacity:0.9;">
<div class="container">
<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-center">
        <li><a class="nav-link" href="/home">Home</a></li>
        <li><a class="nav-link" href="/upload">Upload Certificate</a></li>
        <li><a class="nav-link" href="certificates">My Certificates</a></li>
        <li><a class="nav-link" href="/profile">Profile</a></li>
        <li><a class="nav-link" href="/about">About Us</a></li>
    </ul>
</div>
</div>
</nav>

</nav>

<!-- ooooooooooooooooooooooooooooooooooo close double 4 spacing ooooooooooooooooooooooooooooooooooooooo -->

<div class="row">
<div class="col-lg-1"></div>

<div class="panel panel-default col-lg-10" style="opacity: 0.9; border-radius: 25px;">
 <br> @yield('content')
</div>

<div class="col-lg-1"></div>
</div>

<!-- oooooooooooooooooooooooooooooooooooooooo double 4 spacing ooooooooooooooooooooooooooooooooooooooo -->
<footer class="navbar-inverse" style="opacity:0;">
            
                <div class="container">
                    <div class="row" style="margin-top: 7px;" align="center">
                         <p>Caystar Inv. 2018</p> 
                    </div>
                </div>
                
</footer>
<!-- ooooooooooooooooooooooooooooooooooo close double 4 spacing ooooooooooooooooooooooooooooooooooooooo -->


<footer class="navbar-fixed-bottom navbar-inverse" style="opacity:0.9;">
            
                <div class="container">
                    <div class="row" style="margin-top: 7px;" align="center">
                         <p>Caystar Inv. 2018</p> 
                    </div>
                </div>
                
</footer>
<!--   Core JS Files   -->
<script src="{{ asset('BS3/assets/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('BS3/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('BS3/assets/js/material.min.js') }}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{ asset('BS3/assets/js/chartist.min.js') }}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{ asset('BS3/assets/js/arrive.min.js') }}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{ asset('BS3/assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('BS3/assets/js/bootstrap-notify.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('BS3/assets/js/material-dashboard.js?v=1.2.0') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('BS3/assets/js/demo.js') }}"></script>
</body>
</html>
