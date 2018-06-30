@extends('layouts.admin')

@section('title')
ACRVP - Official | Certificates
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
                    <li class="active">
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
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Certificates</h4>
                                    <p class="category">List of uploaded certificates, their status and action to perform</p>
                                </div>
                                <div class="card-content table-responsive">

                    <hr>
                    <h4>List of Uploaded Certificates</h4>
                           
                            @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             {{ session('success') }}
                             </div>
                            @endif

                        <table id="clemtable" class="table table-striped table-bordered table-responsive" style="width:100%">
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Name</th>
                                            <th>Index no.</th>
                                            <th>Certificate Type</th>
                                            <th>Institution</th>
                                            <th>Years</th>
                                            <th>Certificate ID</th>
                                            <th>Status</th>
                                            <th>Uploaded Date</th>
                                            <th>Mark Collected</th>
                                            <th>Delete</th>
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
                                            <td>{{ $cert->status }}</td>
                                            <td>{{ $cert->created_at }}</td>
                                            
                    @if( $cert->status == 'Not Collected')
        <td><a class="btn btn-info  btn-block" href="/official/mark{{ $cert->id }}"><i class="glyphicon glyphicon-star"></a></td>
                    @else
        <td><a class="btn btn-default btn-block" href="/official/unmark{{ $cert->id }}"><i class="glyphicon glyphicon-remove"></a></td>
                    @endif
     <td><a class="btn btn-danger  btn-block" href="/official/delete{{ $cert->id }}"><i class="glyphicon glyphicon-trash"></i></a></td>
                                <td><a class="btn btn-warning  btn-block" href="/certificates/view_cert/{{ $cert->id }}"><i class="glyphicon glyphicon-eye-open"></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>



                                </div>
                            </div>
                        </div>
                </div>

@endsection