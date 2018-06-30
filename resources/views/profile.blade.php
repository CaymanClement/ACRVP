@extends('layouts.admin')

@section('title') ACRVP | Profile @endsection 


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
                        <a href="/profile">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Profile
                          
                        </a>
                    </li> 
                        <li>
                        <a href="/about">
                            <span class="glyphicon glyphicon-tower"></span>&nbsp &nbsp About Us
                   
                        </a>
                    </li>                      
@endsection

 <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="card animated jackInTheBox">
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
      
        <tr><th>Number of searches done:</th><td> {{ $count }} </td></tr>
        <tr><th colspan="2"><button class="btn-danger btn-block" data-toggle="modal" data-target="#passwrd">Change Password</button></th></tr>

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
                         <input type="text" name="password" class="form-control" minlength="6" required>
 
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