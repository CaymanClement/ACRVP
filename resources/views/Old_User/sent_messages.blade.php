@extends('layouts.admin')

@section('title')
ACVP | Sent Messages
@endsection

@section('content')
@section('menu_li')
                    
                    <li>
                    <a href="{{ URL::previous() }}">
                            <span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp &nbsp Back
                        </a>
                    </li>


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
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $msg)
                                        <tr>
                                            <td>{{ $msg->status }}</td>
                                            <td>{{ $msg->user_id }}</td>
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