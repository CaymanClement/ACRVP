@extends('layouts.admin')

@section('title')
ACVP - Official | Dashboard
@endsection

@section('content')
@section('menu_li')

                    <li class="active">
                        <a href="/official/home">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp &nbsp Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/official/upload">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Upload Certificate
                            
                        </a>
                    </li>
                    <li>
                        <a href="/official/certificates">
                            <span class="glyphicon glyphicon-tasks"></span>&nbsp &nbsp Certificates
              
                        </a>
                    </li>
                        

                    <li>
                        <a href="/official/users">
                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp &nbsp System Users
            
                        </a>
                    </li>
                    <li>
                        <a href="/official/messages">
                            <span class="glyphicon glyphicon-comment"></span>&nbsp &nbsp Messages
                         
                        </a>
                    </li>
                    <li>
                        <a href="/official/announcements">
                            <span class="glyphicon glyphicon-bullhorn"></span>&nbsp &nbsp Announcements
                         
                        </a>
                    </li>
                    <li>
                        <a href="/official/profile">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Profile
                            
                        </a>
                    </li>


 					                    
@endsection

                <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="card animated jackInTheBox">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Dashboard</h4>
                                    <p class="category">System top activities</p>
                                </div>
                                <div class="card-content">
                       

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registered<br>Users</p>
                                    <h3 class="title">{{$count_user}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                        <a href="/official/users">View Users</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <span class="glyphicon glyphicon-briefcase"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registered Organisations</p>
                                    <h3 class="title">{{$count_org}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                        <a href="/official/users">View Users</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <span class="glyphicon glyphicon-tasks"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Uploaded Certificates</p>
                                    <h3 class="title">{{$count_cert}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="/official/certificates">View Certificates</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Search Records</p>
                                    <h3 class="title">{{$count_vercert}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="/official/certificates">View Certificates</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                                </div>
                            </div>
                        </div>
                </div>


@endsection