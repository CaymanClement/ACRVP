@extends('layouts.admin')

@section('title')
ACRVP | Payments
@endsection

@section('content')
@section('menu_li')
                    <li>
                    <a href="/">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp &nbsp Home
                        </a>
                    </li>

                    <li>
                        <a href="/upload">
                            <span class="glyphicon glyphicon-tasks"></span>&nbsp &nbsp Search Certificate
              
                        </a>
                    </li>

                    <li>
                        <a href="/certificates">
                            <span class="glyphicon glyphicon-tasks"></span>&nbsp &nbsp My Search Records
              
                        </a>
                    </li>


                    <li>
                        <a href="/messages">
                            <span class="glyphicon glyphicon-comment"></span> &nbsp &nbsp Messages <br>
               
                        </a>
                    </li>  
                        
                    <li class="active">
                        <a href="/payment">
                            <span class="glyphicon glyphicon-credit-card"></span>&nbsp &nbsp Plan Details
                   
                        </a>
                    </li>

                    <li>
                        <a href="/profile">
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

                                <div class="panel panel-danger">
                                        <div class="panel-heading"><h4>Create a New Payment Record</h4></div>
                                        <div class="panel-body">
                                       
                                        <form role="form" method="post" action="{{URL::to('/admin/create_announcement')}}" enctype="multipart/form-data" >


                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                                    <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                                     <label>Payment Amount:</label>
                                     <input type="text" name="amount" class="form-control">
                                     <span class="text-danger">{{ $errors->first('amount') }}</span>
                                    </div>

                                    <div class="form-group {{ $errors->has('filename') ? 'has-error' : '' }}">
                                     <label>File upload:</label>
                                     <input type="file" name="filename" class="form-control">
                                     <span class="text-danger">{{ $errors->first('filename') }}</span>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                     <p align="center"> <button type="submit" class="btn btn-danger">Submit Payment</button></p>
                                    </form> 
                                        </div>
                                        
                                    </div>
<br>
                                <table id="clemtable" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Username</th>
                                            <th>Organization</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Filename</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $pay)
                                        <tr>
                                            <td>{{ $pay->user_id }}</td>
                                            <td>{{ $pay->user_id }}</td>
                                            <td>{{ $pay->amount }}</td>
                                            <td>{{ $pay->status }}</td>
                                            <td>{{ $pay->filename }}</td>
                                            <td>{{ $pay->created_at }}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>


                                </div>
                            </div>
                        </div>
                </div>
@endsection