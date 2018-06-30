@extends('layouts.admin')

@section('title')
ACRVP - Organisation | Users
@endsection

@section('content')
@section('menu_li')
                    <li class="active">
                        <a href="/my/home">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li>
                        <a href="/organisation/certificates">
                            <i class="material-icons">assignment</i>
                            <p>Certificates</p>
                        </a>
                    </li>
                        <a href="/my/messages">
                            <i class="material-icons">message</i>
                            <p>Messages</p>
                        </a>
                    </li>  

                        <a href="/organisation/payment">
                            <i class="material-icons">payment</i>
                            <p>Payments</p>
                        </a>
                    </li>  


                    <li class="active">
                        <a href="/admin/system_users">
                            <i class="material-icons">people</i>
                            <p>System Users</p>
                        </a>
                    </li>

                    <li>
                        <a href="/my/profile">
                            <i class="material-icons">person</i>
                            <p>Profile</p>
                        </a>
                    </li>                    
@endsection
                <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title"> John's Profile</h4>
                                    <p class="category">Details for the user and certificates uploaded</p>
                                </div>
                                <div class="card-content">
                                   







                                </div>
                            </div>
                        </div>
                </div>
@endsection