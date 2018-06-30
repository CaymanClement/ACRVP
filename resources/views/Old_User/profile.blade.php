@extends('layouts.layout')

@section('title') OCV | Profile @endsection 


@section('content')

<div class="panel panel-info">
  <div class="panel-heading"><h3>Profile, {{ Auth::user()->name }} </h3></div>
  <div class="panel-body">
                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('success') }}
                             </div>
                             @endif
  	<table class="table">
  		<tr><th rowspan="7"><img src="images/profile.png" width="300" height="300"></th><th>First Name:</th><td> {{ Auth::user()->first_name }} </td></tr>
      <tr><th>Middle Name:</th><td> {{ Auth::user()->mid_name }} </td></tr>
  		<tr><th>Last Name:</th><td> {{ Auth::user()->last_name }} </td></tr>
      <tr><th>Gender:</th><td> {{ Auth::user()->gender }} </td></tr>
  		<tr><th>Email:</th><td> {{ Auth::user()->email }} </td></tr>
  		<tr><th>Mobile Phone:</th><td> 0756888999 </td></tr>
      
  		<tr><th>Number of certificates uploaded:</th><td> {{ $count }} </td></tr>
  		

  	</table>


  </div>
</div>


@endsection