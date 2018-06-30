@extends('layouts.admin')

@section('title')
ACRVP | Messages
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


                    <li class="active">
                        <a href="/messages">
                            <span class="glyphicon glyphicon-comment"></span> &nbsp &nbsp Messages <br>
               
                        </a>
                    </li>  

                    <li>
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
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Messages</h4>
                                    <p class="category">Recieved Messages</p>
                                </div>
                                <div class="card-content">
 
                            @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('success') }}
                             </div>
                             @endif


                                    <div class="row" align="center">
                                    <span class="col-lg-1"></span>
                        <button class="btn btn-danger col-lg-5" data-toggle="modal" data-target="#myModal">Create Message</button>

                  <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Create New Message</h4>
                        </div>
                        <div class="modal-body">
                        <form action="/send_message" method="post" id="msg">   
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>                              
                         
                         <div class="form-group {{ $errors->has('recipient') ? 'has-error' : '' }}">
                         <label>Recipient (Support Team):</label>
                         <select name="recipient" class="form-control" required>
                           <option value="">Choose Recipient: </option>
                           @foreach ($userslist as $ul) 
                           <option value="{{ $ul->id }}">{{ $ul->first_name }} {{ $ul->mid_name }} {{ $ul->last_name }} - Admin</option>
                           @endforeach
                         </select>
                    
                         </div>

                         <label>Subject:</label>
                         <input type="text" name="subject" class="form-control">

                        <div class="form-group {{ $errors->has('contents') ? 'has-error' : '' }}">
                         <label>Message:</label>
                         <textarea name="contents" id="msg" class="form-control"></textarea>
                         </div>
                        <input type="hidden" name="sender" value="{{ Auth::user()->first_name }} {{ Auth::user()->mid_name }} {{ Auth::user()->last_name }}"/>
 


                                    </div>

                                    <div class="modal-footer">
                                      
                                      <button type="submit" class="btn btn-success col-lg-5">Send Message</button>
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Discard</button>
                                      </form>
                                      
                                    </div>
                                    
                                  </div>
                                  
                                </div>
                              </div>

                                    <a href="/sent_messages" class="btn btn-danger col-lg-5">Sent Messages</a>
                                    <span class="col-lg-1"></span>

                                    </div>

                                <table id="clemtable" class="table table-striped" style="width:100%">
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Status</th>
                                            <th>From</th>
                                            <th>Subject</th>
                                            <th>Content</th>
                                            <th>Date</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $msg)
                                        <tr>
                                            @if($msg->status == 'New')
                                            <td bgcolor="Yellow">{{ $msg->status }}</td>
                                            @else
                                            <td>{{ $msg->status }}</td>
                                            @endif

                                            <td>{{ $msg->sender }}</td>
                                            <td>{{ $msg->subject }}</td>
                                            <td>{{ $msg->content }}</td>
                                            <td>{{ $msg->created_at }}</td>
                                            <td><a class="btn btn-danger" href="/{{ $msg->id }}view_message">View</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                </div>
                            </div>
                        </div>
                </div>

@endsection