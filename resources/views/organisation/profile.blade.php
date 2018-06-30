@extends('layouts.admin')

@section('title')
ACRVP - Organisation | Profile
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

                    <li>
                        <a href="/organization/users">
                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp &nbsp System Users
                        </a>
                    </li>

                    <li class="active">
                        <a href="/organization/profile">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Profile
                          
                        </a>
                    </li>                   
@endsection

                <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Profile</h4>
                                    <p class="category">My profile details</p>
                                </div>
                                <div class="card-content">
                       


                        <table class="table table-responsive">
        <tr><th rowspan="8"><img src="{{ asset('images/profile.png')}}" style="width:300px; height:300px;"></th>

        <th>First Name:</th><td> {{ Auth::user()->first_name }} </td></tr>
      <tr><th>Middle Name:</th><td> {{ Auth::user()->mid_name }} </td></tr>
        <tr><th>Last Name:</th><td> {{ Auth::user()->last_name }} </td></tr>
      <tr><th>Gender:</th><td> {{ Auth::user()->gender }} </td></tr>
        <tr><th>Email:</th><td> {{ Auth::user()->email }} </td></tr>
        <tr><th>Mobile Phone:</th><td> +255{{ Auth::user()->phone }} </td></tr>
      <tr><th>Role</th><td>
      @if(Auth::user()->role_id == 1)
      Graduant
      @elseif(Auth::user()->role_id == 2)
      Admin
      @elseif(Auth::user()->role_id == 3)
      Official 
      @elseif(Auth::user()->role_id == 4)
      Recruiter
      @endif
     </td></tr>
  <tr><th colspan="2"><button class="btn-danger btn-warning btn-block" data-toggle="modal" data-target="#passwrd">Change Password</button></th></tr>

    </table>
                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('success') }}
                             </div>
                             @endif
                  </div>
               </div>
            </div>


 <div class="modal fade" id="passwrd" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Set a New Password</h4>
                                    </div>
                                    <div class="modal-body">
                        
                        <form action="/change{{ Auth::user()->id }}password" method="post">  
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>                              
                         
                         <div class="form-group {{ $errors->has('recipient') ? 'has-error' : '' }}">
                         
                            <label>Enter New Password:</label>
                         <input type="password" name="password" class="form-control" minlength="6" required>
 
                         <span class="text-danger">{{ $errors->first('recipient') }}</span>
                         </div>

                        
                                   </div>

                                    <div class="modal-footer">
                                      
                                      <button type="submit" class="btn btn-success">Change Password</button>
                                      </form>
                                      
                                    </div>
                                    
                                  </div>
                                  
                                </div>
                              </div><!--end modal -->
               </div>


@endsection