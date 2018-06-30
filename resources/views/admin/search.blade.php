@extends('layouts.admin')

@section('title')
ACRVP - Admin | Search Records
@endsection

@section('content')
@section('menu_li')
 					<li>
                        <a href="/admin">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp &nbsp Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="/admin/certificates">
                            <span class="glyphicon glyphicon-tasks"></span>&nbsp &nbsp Certificates
              
                        </a>
                    </li>

                    <li class="active">
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
                                            <th>Institution</th>
                                            <th>Year of Completion</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sr as $reco)
                                        <tr>
                                            <td>{{ $reco->first_name }} {{ $reco->mid_name }} {{ $reco->last_name }}</td>
                                            <td>{{ $reco->reg_no }}</td>
                                            <td>{{ $reco->institution }}</td>
                                            <td>{{ $reco->year }}</td>
                                            <td>{{ $reco->comment }}</td>
                                        @endforeach
                                    </tbody>
                                </table>

                                



                                </div>
                            </div>
                        </div>
                </div>

@endsection

