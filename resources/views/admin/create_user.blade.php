@extends('layouts.admin')

@section('title')
ACVP - Admin | Create User
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

                    <li class="active">
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
                                    <h4 class="title">Create User</h4>
                                    <p class="category">Add a new user and their respective role</p>
                                </div>
                                <div class="card-content">


                        <form class="form-horizontal" method="POST" action="/admin/add_user">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mid_name') ? ' has-error' : '' }}">
                            <label for="mid_name" class="col-md-4">Middle Name</label>

                            <div class="col-md-6">
                                <input id="mid_name" type="text" class="form-control" name="mid_name" value="{{ old('mid_name') }}" required>

                                @if ($errors->has('mid_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mid_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                       <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4">Role</label>

                            <div class="col-md-6">
                            <select name="role" id="role" class="form-control" value="{{ old('role') }}" required autofocus>
                                    <option value="">Choose Role: </option>
                                    <option value="2">Admin</option>
                                    <option value="3">Official</option>
                                    <option value="4">Organization</option>
                            </select>
                            </div>
                        </div>

                       <div class="form-group{{ $errors->has('organization') ? ' has-error' : '' }}" id="others">
                            <label for="organization" class="col-md-4">Organization</label> 

                            <div class="col-md-6">
                                  <input type="text" id="organization" name="organization" class="form-control" required>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4">Phone +255</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" minlength="9" maxlength="9" pattern="[0-9]*" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4">Gender</label>

                            <div class="col-md-6" class="form-control">
                                <input id="gender" type="radio" name="gender" value="Male" required>Male

                                <input id="gender" type="radio" name="gender" value="Female" required>Female
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-block">
                                    Register User
                                </button>
                            </div>
                        </div>
                    </form>




                                </div>
                            </div>
                        </div>
                </div>


@endsection