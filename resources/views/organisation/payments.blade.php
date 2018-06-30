@extends('layouts.admin')

@section('title')
ACRVP - Organisation | Payments
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
                        
                    <li class="active">
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
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title"> Payment Records</h4>
                                    <p class="category">Details of payments for using the system</p>
                                </div>
                                <div class="card-content">
                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('success') }}
                             </div>
                             @endif
<br>
                                <div class="panel panel-danger">
                                        <div class="panel-heading"><b>Payments Record</b></div>
                                        <div class="panel-body">

                                <table id="clemtable" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Organization</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Filename</th>
                                            <th>Date</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $pay)
                                        <tr>
                                            <td>{{ $pay->organization_name }}</td>
                                            <td>{{ $pay->amount }}</td>
                                            <td>{{ $pay->p_status }}</td>
                                            <td>{{ $pay->filename }}</td>
                                            <td>{{ $pay->created_at }}</td>
                                            <td><a class="btn btn-info" href="/admin/{{ $pay->p_id }}view_slip">View Doc</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>


                                </div>
                            </div>
                        </div>
                </div>
@endsection