@extends('layouts.admin')

@section('title')
ACVP - Official | Users
@endsection

@section('content')
@section('menu_li')
                    
                    <li>
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
                        

                    <li class="active">
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
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">{{ Auth::user()->organization }} System Users</h4>
                                    <p class="category">List of Registered Graduants</p>
                                </div>
                                
            <div class="card-content">   
                <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registered<br>Organizations</p>
                                    <h3 class="title">{{ $count_org }}
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                 <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registered<br>Admins</p>
                                    <h3 class="title">{{ $count_admins }}</h3>
                                </div>
                                </div>
                            </div>
                        

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                   <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registered<br>Officials</p>
                                    <h3 class="title">{{ $count_officials }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                   <span class="glyphicon glyphicon-eye-open"></span>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registered<br>Graduants</p>
                                    <h3 class="title">{{ $count_graduants }}</h3>
                                </div>
                            </div>
                        </div>
                        </div>
                        <br>
                                <table id="clemtable" class="table table-striped table-bordered" style="width:100%">
                               
                                    <thead class="text-danger">
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Organization</th>
                                            <th>Date</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $user)
                                        <tr>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->mid_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>+255 {{ $user->phone }}</td>
                                            <td>{{ $user->organization }}</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                    </div>







                                </div>
                            </div>
                        </div>
                </div>
@endsection