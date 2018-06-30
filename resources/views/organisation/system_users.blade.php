@extends('layouts.admin')

@section('title')
ACRVP - Organisation | Users
@endsection

@section('content')
@section('menu_li')
                    <li>
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

                    <li class="active">
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
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">System Users</h4>
                                    <p class="category">List of the System users</p>
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

                    <h4>List of Graduants Registered</h4>

                                <table id="clemtable" class="table table-striped table-bordered" style="width:100%">
                               
                                    <thead class="text-danger">
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            
                                            <th>Status</th>
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
                                            
                                            <td>{{ $user->status }}</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                   







                                </div>
                            </div>
                        </div>
                </div>
@endsection