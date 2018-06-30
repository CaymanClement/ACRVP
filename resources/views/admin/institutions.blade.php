@extends('layouts.admin')

@section('title')
ACRVP | Institutions
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

                    <li class="active">
                        <a href="/admin/users">
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
                                    <h4 class="title">Educational Institutions</h4>
                                    <p class="category">Manage institutions, schools, colleges, universities etc.</p>
                                </div>
                                <div class="card-content">
                                    <br>
                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('success') }}
                             </div>
                             @endif

                                    <div class="panel panel-danger">
                                        <div class="panel-heading"><b>Register a new Institution</b></div>
                                        <div class="panel-body">
                                       
                                        <form role="form" method="post" action="{{URL::to('/admin/reg_inst')}}" enctype="multipart/form-data" >


                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                                    <div class="row">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} col-lg-6">
                                     <label>Institution Name:</label>
                                     <input type="text" name="name" class="form-control">
                                     <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>

                                    <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }} col-lg-6">
                                     <label>Contact:</label>
                                     <input type="text" name="contact" pattern="[0-9]{10}" class="form-control">
                                     <span class="text-danger">{{ $errors->first('contact') }}</span>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} col-lg-6">
                                     <label>Inst. Email:</label>
                                     <input type="email" name="email" class="form-control">
                                     <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>

                                    <div class="form-group {{ $errors->has('adress') ? 'has-error' : '' }} col-lg-6">
                                     <label>Adress:</label>
                                     <input type="text" name="adress" class="form-control">
                                     <span class="text-danger">{{ $errors->first('adress') }}</span>
                                    </div>

                                    <input type="hidden" name="i_status" value="Active" />
                                    </div>
                                     <p> <button type="submit" class="btn btn-danger col-lg-6 col-lg-offset-3">Register Institution</button></p>
                                    </form> 
                                        </div>
                                        
                                    </div>
                            

                                <div class="panel panel-danger">
                                <div class="panel-heading"><h4>Registered Institutions</h4></div>
                                <div class="panel-body">

                              <table id="clemtable" class="table table-striped" style="width:100%">
                               
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Organization Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Adress</th>
                                            <th>Status</th>
                                            <th>Date registered</th>
                                            <th>Block</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inst as $ist)
                                        <tr>
                                            <td>{{ $ist->org_name }}</td>
                                            <td>{{ $ist->contact }}</td>
                                            <td>{{ $ist->email }}</td>
                                            <td>{{ $ist->adress }}</td> 
                                            <td>{{ $ist->i_status }}</td> 
                                            <td>{{ $ist->created_at }}</td>
                                @if($ist->i_status == 'Active')
                                <td><a class="btn btn-danger btn-block" href="/admin/block{{ $ist->org_name }}inst">Block</a></td>
                                @else
                                <td><a class="btn btn-success btn-block" href="/admin/unblock{{ $ist->org_name }}inst">Unblock</a></td>
                                @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                                   
                                </div>
                            </div>
                        </div>
                </div>
@endsection