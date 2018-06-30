@extends('layouts.admin')

@section('title')
ACRVP | View Message
@endsection

@section('content')
@section('menu_li')
                    
                    <li>
                    <a href="{{ URL::previous() }}">
                            <span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp &nbsp <b>Back</b>
                        </a>
                    </li>
                    @if(Auth::user()->role_id == '2')
                    <li>
                    <a href="/admin/messages">
                            <span class="glyphicon glyphicon-comment"></span>&nbsp &nbsp Messages
                        </a>
                    </li>
                    @elseif(Auth::user()->role_id == '4')
                    <li>
                    <a href="/organization/messages">
                            <span class="glyphicon glyphicon-comment"></span>&nbsp &nbsp Messages
                        </a>
                    </li>
                    @elseif(Auth::user()->role_id == '3')
                    <li>
                    <a href="/official/messages">
                            <span class="glyphicon glyphicon-comment"></span>&nbsp &nbsp Messages
                        </a>
                    </li>
                    @else      
                    <li>
                    <a href="/messages">
                            <span class="glyphicon glyphicon-comment"></span>&nbsp &nbsp Messages
                        </a>
                    </li>
                    @endif

@endsection

                <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Subject: {{ $findmsg->subject }} </h4>
                                    <p class="category">From: {{ $findmsg->sender }}</p>
                                </div>
                                <div class="card-content">
                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('success') }}
                             </div>
                             @endif
                       <b>Content:</b> <p>{{ $findmsg->content }}</p>
                       <p><button class="btn-danger btn-block" data-toggle="modal" data-target="#reply">Reply</button></p>

 <div class="modal fade" id="reply" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Reply Message</h4>
                                    </div>
                                    <div class="modal-body">
                        
                        <form action="/send_message" method="post" id="msg">  
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>                              
                         <div class="form-group {{ $errors->has('recipient') ? 'has-error' : '' }}">
                         <label>Recipient: Choose {{ $findmsg->sender }}</label>
                         <select name="recipient" class="form-control">
                           <option value="">Choose Recipient: </option>
                           @foreach ($userslist as $ul) 
                           <option value="{{ $ul->id }}">{{ $ul->first_name }} {{ $ul->mid_name }} {{ $ul->last_name }}</option>
                           @endforeach
                         </select>
                        <span class="text-danger">{{ $errors->first('recipient') }}</span>
                         </div>

                         <label>Subject:</label>
                         <input type="text" name="subject" class="form-control" value="Reply on - {{ $findmsg->subject }}">

                        <div class="form-group {{ $errors->has('contents') ? 'has-error' : '' }}">
                         <label>Message:</label>
                         <textarea name="contents" id="msg" class="form-control"></textarea>
                         <span class="text-danger">{{ $errors->first('contents') }}</span>
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

                                </div>
                            </div>
                        </div>
                </div>


@endsection