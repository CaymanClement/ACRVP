@extends('layouts.admin')

@section('title')
ACRVP | Announcements
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
                       
                    <li>
                        <a href="/admin/institutions">
                            <span class="glyphicon glyphicon glyphicon-blackboard"></span>&nbsp &nbsp Educational Institutions
            
                        </a>
                    </li>
                    <li class="active">
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
                                    <h4 class="title">Announcements</h4>
                                    <p class="category">Manage public announcements</p>
                                </div>
                                <div class="card-content">
                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('success') }}
                             </div>
                             @endif
                                    <div class="panel panel-danger">
                                        <div class="panel-heading"><h4>Create a New Announcement</h4></div>
                                        <div class="panel-body">
                                       
        <form role="form" method="post" action="{{URL::to('/admin/create_announcement')}}" enctype="multipart/form-data" >


                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>


                                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                     <label>Title:</label>
                                     <input type="text" name="title" class="form-control" required>
                                    </div>

                                    <div class="form-group {{ $errors->has('contents') ? 'has-error' : '' }}">
                                     <label>Contents:</label>
                                     <textarea name="contents" class="form-control" required></textarea>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                     <p align="center"> <button type="submit" class="btn btn-danger">Publish Announcement</button></p>
                                    </form> 
                                        </div>
                                        
                                    </div>
                            

                                <div class="panel panel-danger">
                                <div class="panel-heading"><h4>My Announcements</h4></div>
                                <div class="panel-body">

                              <table id="clemtable" class="table table-striped" style="width:100%">
                               
                                    <thead class="text-danger">
                                        <tr>
                                            <th>Title</th>
                                            <th>Contents</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($announcements as $ann)
                                        <tr>
                                            <td>{{ $ann->title }}</td>
                                            <td>{{ $ann->contents }}</td>
                                            <td>{{ $ann->created_at }}</td>
                                <td><a class="btn btn-danger" href="/delete_ann/{{ $ann->id }}">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                                   
                                </div>
                            </div>
                        </div>
                </div>
@endsection