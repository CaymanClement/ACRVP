@extends('layouts.admin')

@section('title')
ACRVP - Organisation | Dashboard
@endsection

@section('content')
@section('menu_li')
                    <li class="active">
                    <a href="/organization/home">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp &nbsp Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="/organization/certificates">
                            <span class="glyphicon glyphicon-tasks"></span>&nbsp &nbsp Certificates
              
                        </a>
                    </li>
                    <li>
                        <a href="/organization/messages">
                            <span class="glyphicon glyphicon-comment"></span> &nbsp &nbsp Messages <br>
               
                        </a>
                    </li>  
                        
                    <li>
                        <a href="/organization/payment">
                            <span class="glyphicon glyphicon-credit-card"></span>&nbsp &nbsp Payments
                   
                        </a>
                    </li>  

                    <li>
                        <a href="/organization/users">
                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp &nbsp System Users
                        </a>
                    </li>

                    <li>
                        <a href="/organization/profile">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Profile
                          
                        </a>
                    </li>                                    
@endsection

                <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="card animated rotateInDownLeft">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Dashboard</h4>
                                    <p class="category">System top activities</p>
                                </div>
                                <div class="card-content">
                       

                        <div class="row">
                        <div class="col-lg-4 col-md-8 col-sm-8">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registered Users</p>
                                    <h3 class="title">{{$count_user}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                        <a href="/organization/users">View Users</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8">
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
                                        
                                      <a href="/organization/users">View Users</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8 col-sm-8">
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
                                        <a href="/organization/certificates">View Certificates</a>
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