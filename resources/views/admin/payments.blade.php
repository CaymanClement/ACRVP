@extends('layouts.admin')

@section('title')
ACRVP - Admin | Payments
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
                    <li class="active">
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
                             
                                <div class="panel panel-danger">
                                        <div class="panel-heading"><b>Create a New Payment Record</b></div>
                                        <div class="panel-body">
                                       
                                    <form role="form" method="post" action="{{URL::to('/admin/pay')}}" enctype="multipart/form-data" >


                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                                    <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                                     <label>Payment Amount:</label>
                                     <input type="text" name="amount" class="form-control" pattern="[0-9]*" required>
                                     <span class="text-danger">{{ $errors->first('amount') }}</span>
                                    </div>

                                    <div class="form-group {{ $errors->has('org') ? 'has-error' : '' }}">
                                     <label>Organization:</label>
                                        <select name="org" class="form-control">
                                        <option value="">Choose Organization: </option>
                                        @foreach($user as $users)
                                        <option value="{{$users->organization}}">{{$users->organization}}</option>
                                        @endforeach
                                        </select>                                   
                                     <span class="text-danger">{{ $errors->first('org') }}</span>
                                    </div>

                                    <div class="form-group {{ $errors->has('fileuploaded') ? 'has-error' : '' }}">
                                     <label>File upload:</label>
                                     <input type="file" name="fileuploaded" class="form-control">
                                     <span class="text-danger">{{ $errors->first('fileuploaded') }}</span>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                     <p align="center"> <button type="submit" class="btn btn-danger">Submit Payment</button></p>
                                    </form> 
                                        </div>
                                        
                                    </div>
                                    <br>          
                                <div class="panel panel-danger">
                                        <div class="panel-heading"><b>Payments Records</b></div>
                                        <div class="panel-body">      
                                    <table id="clemtable" class="table table-striped" style="width:100%">
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Organization</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Filename</th>
                                            <th>Date</th>
                                            <th>View</th>
                                            <th>Verify</th>
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
                                @if($pay->p_status == 'Verified')
                                <td><a class="btn btn-danger btn-block" href="/admin/unverify{{ $pay->p_id }}pay">Unverify</a></td>
                                @else
                                <td><a class="btn btn-success btn-block" href="/admin/verify{{ $pay->p_id }}pay">Verify</a></td>
                                @endif

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