@extends('layouts.admin')

@section('title')
ACRVP - Organisation | Certificates
@endsection

@section('content')
@section('menu_li')
                    <li>
                    <a href="/organization/home">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp &nbsp Dashboard
                        </a>
                    </li>

                    <li class="active">
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
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Certificates</h4>
                                    <p class="category">List of uploaded certificates</p>
                                </div>
                                <div class="card-content table-responsive">
                                
                                <table id="clemtable" class="table table-striped" style="width:100%">
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Name</th>
                                            <th>Index no.</th>
                                            <th>Certificate Type</th>
                                            <th>Institution</th>
                                            <th>Years</th>
                                            <th>Certificate ID</th>
                                            <th>Date Uploaded</th>
                                            <th>View</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user_certificates as $cert)
                                        <tr>
                                            <td>{{ $cert->f_name }} {{ $cert->m_name }} {{ $cert->l_name }}</td>
                                            <td>{{ $cert->index_no }}</td>
                                            <td>{{ $cert->type }}</td>
                                            <td>{{ $cert->school }}</td>
                                            <td>{{ $cert->year_from }} - {{ $cert->year_to }}</td>
                                            <td>{{ $cert->certificate_id }}</td>
                                            <td>{{ $cert->created_at }}</td>
                                <td><a class="btn btn-danger" href="/certificates/view_cert/{{ $cert->id }}">View</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                



                                </div>
                            </div>
                        </div>
                </div>
@endsection