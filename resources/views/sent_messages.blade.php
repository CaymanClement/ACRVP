@extends('layouts.admin')

@section('title')
ACRVP | Sent Messages
@endsection

@section('content')
@section('menu_li')
                    
                    <li>
                    <a href="{{ URL::previous() }}">
                            <span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp &nbsp Back
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
                                    <h4 class="title">Sent Messages</h4>
                                    <p class="category">List of messages sent by me</p>
                                </div>
                                <div class="card-content">
                       


                                <table id="clemtable" class="table table-striped" style="width:100%">
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Status</th>
                                            <th>To</th>
                                            <th>Subject</th>
                                            <th>Content</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $msg)
                                        <tr>
                                            <td>{{ $msg->status }}</td>
                                            <td>{{ $msg->first_name }} {{ $msg->mid_name }} {{ $msg->last_name }}</td>
                                            <td>{{ $msg->subject }}</td>
                                            <td>{{ $msg->content }}</td>
                                            <td>{{ $msg->created_at }}</td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                </div>
                            </div>
                        </div>
                </div>


@endsection