@extends('layouts.admin')

@section('title')
ACRVP | Dashboard
@endsection

@section('content')
@section('menu_li')
 					<li class="active">
                        <a href="/admin">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp &nbsp Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="/admin/certificates">
                            <span class="glyphicon glyphicon-tasks"></span>&nbsp &nbsp Certificates
              
                        </a>
                    </li>
                    <li>
                        <a href="/admin/searches">
                            <span class="glyphicon glyphicon-search"></span>&nbsp &nbsp Search Records
              
                        </a>
                    </li>
                    <li>
                        <a href="/admin/messages">
                            <span class="glyphicon glyphicon-comment"></span> &nbsp &nbsp Messages <br>
               
                        </a>
                    </li>                            
                    <li>
                        <a href="/admin/payment">
                            <span class="glyphicon glyphicon-credit-card"></span>&nbsp &nbsp Payments
                   
                        </a>
                    </li>  

                    <li>
                        <a href="/admin/users">
                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp &nbsp System Users
            
                        </a>
                    </li>
                    <li>
                        <a href="/admin/institutions">
                            <span class="glyphicon glyphicon glyphicon-blackboard"></span>&nbsp &nbsp Educational Institutions
            
                        </a>
                    </li>
                    <li>
                        <a href="/admin/announcements">
                            <span class="glyphicon glyphicon-bullhorn"></span>&nbsp &nbsp Announcements
                         
                        </a>
                    </li>
                    <li>
                        <a href="/admin/profile">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Profile
                        </a>
                    </li>                    
@endsection

                <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="card animated headShake">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Dashboard</h4>
                                    <p class="category">System top activities</p>
                                </div>
                                <div class="card-content">
                       

                       <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats animated bounceInLeft">
                                <div class="card-header" data-background-color="orange">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registered<br>Users</p>
                                    <h3 class="title">{{$count_user}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                        <a href="admin/create_user">Add User</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats animated bounceInDown">
                                <div class="card-header" data-background-color="green">
                                    <span class="glyphicon glyphicon-briefcase"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registered Organisations</p>
                                    <h3 class="title">{{$count_org}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                        <a href="admin/institutions">View Users</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats animated bounceInUp">
                                <div class="card-header" data-background-color="red">
                                    <span class="glyphicon glyphicon-tasks"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Uploaded Certificates</p>
                                    <h3 class="title">{{$count_cert}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="admin/certificates">View Certificates</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats animated bounceInRight">
                                <div class="card-header" data-background-color="blue">
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Search Records</p>
                                    <h3 class="title">{{$count_searches}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="admin/searches">Search Records</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                                </div>
                            </div>


                            <div class="card animated zoomInUp">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Contact Us</h4>
                                    <p class="category">Messages from users recently contacted us</p>
                                </div>
                                <div class="card-content">
                             <table id="clemtable" class="table table-striped" style="width:100%">
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cont as $con)
                                        <tr>
                                            <td>{{ $con->name }}</td>
                                            <td>{{ $con->email }}</td>
                                            <td>{{ $con->message }}</td>
                                            <td>{{ $con->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>

                       



                        </div>
                </div>


@endsection