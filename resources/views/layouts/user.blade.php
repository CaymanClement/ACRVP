<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('BS3/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('BS3/assets/css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('bootstrap3/css/bootstrap.min.css') }}">
    <!--     Fonts and icons     -->
    <link href="{{ asset('BS3/assets/fonts/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('BS3/assets/fonts/MaterialIcons.css') }}" rel='stylesheet'>

    <link href="{{ asset('BS3/assets/tables/datatables.min.css') }}" rel='stylesheet'>

    <link href="{{ asset('mdbootstrap/css/mdb.css') }}" rel="stylesheet">
    @yield('styles')
    
</head>

<body style="background:url({{ asset('images/bg.jpg') }}); background-size:cover;">
    

        
            <header>
            <nav class="navbar navbar-absolute" style="opacity:0.9;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>


                    <div class="collapse navbar-collapse">
                           <ul class="nav navbar-nav navbar-left"><li>
            <div class="logo">
                    <a href="/home">
                    <img src="{{url(asset('images/acrvp.png'))}}" alt="ACRVP Platform" style="height: 60px; width: 200px;" >
                    </a>
            </div>
                            </li></ul> 

                        <ul class="nav navbar-nav navbar-right">

                                @if(Auth::guest())

                                <li>
                                <a href="/login">
                                <span>Login</span>
                                </a>
                                </li>

                                <li>
                                <a href="/register">
                                <span>Register</span>
                                </a>   
                                </li>
                                @else
                                <li>
                                <a href="/profile" class="dropdown-toggle">
                                    <span> {{ Auth::user()->first_name }}  {{ Auth::user()->last_name }}</span> &nbsp
                                    <span class="glyphicon glyphicon-user"></span>
                                </a>
                                </li>
                            <li>
                                <a href="/messages" class="dropdown-toggle">
                                    <span class="glyphicon glyphicon-comment"></span>
                                    
                                </a>
                            </li>
                                <li>
                                <a class="nav-link" href="/logout">
                                <span class="glyphicon glyphicon-log-out"></span>
                                </a>
                                </li>
                                @endif
                            
                        </ul>

                    </div>
                </div>
            </nav>
        </header>



            <div class="content">
                @yield('content')
            </div> 
            <footer class="navbar-fixed-bottom" style="background: white; opacity: 0.9;">
                <div class="container-fluid">

                    <p align="center">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://caystar.clemerz.com">Caystar Inventions</a>, 
                    </p>
                </div>
            </footer>
      
    </div>
</body>
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


<!--  For data table    -->
<script>
    $(document).ready(function() {
    $('#clemtable').DataTable();
} );
</script>
<script src="{{ asset('BS3/assets/tables/datatables.min.js') }}" type="text/javascript"></script>
</html>