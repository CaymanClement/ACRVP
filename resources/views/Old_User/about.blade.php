@extends('layouts.layout')

@section('title') OCV | About Us @endsection

@section('styles')
<link href="{{ asset('mdbootstrap/css/mdb.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')

<div class="row">
<div class="panel-group">
<div class="col-lg-8">
<div class="panel panel-info animated bounceInLeft">
  <div class="panel-heading"><h3>About Us</h3></div>
  <div class="panel-body">Cut overall expenses, reduce financial risk, and combat academic fraud.
	The Clearinghouse instantly, accurately, and securely verifies enrollment and graduation information for students of most public and private 
</div>
</div>
</div>


<div class="col-lg-4">
<div class="panel panel-info animated bounceInRight">
  <div class="panel-heading"><h3>Contact Us</h3></div>
  <div class="panel-body">Cut overall expenses, reduce financial risk, and combat academic fraud.
	The Clearinghouse instantly, accurately, and securely verifies enrollment and graduation information for students of most public and private 
</div>
</div>

<br>

<div class="panel panel-info animated flipInX">
	<div class="panel-heading"><h3>Contact US Form</h3></div>
	<div class="panel-body">
                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                             	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            		{{ session('success') }}
                             </div>
                             @endif
		
	<form role="form" method="post" action="{{URL::to('about/contact-us')}}" enctype="multipart/form-data">
		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>

		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

<label>Name:</label>
<input type="text" name="name" class="form-control" placeholder="name">

			<span class="text-danger">{{ $errors->first('name') }}</span>

		</div>


		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
<label>Email:</label>
<input type="text" name="email" class="form-control" placeholder="Enter Email">

			<span class="text-danger">{{ $errors->first('email') }}</span>

		</div>


		<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
<label>Message:</label>
<input type="text" name="message" class="form-control" placeholder="Enter Message">

			<span class="text-danger">{{ $errors->first('message') }}</span>

		</div>


		<div class="form-group">

			<button class="btn btn-success">Contact US!</button>

		</div>


	
</form>
</div></div></div>



@endsection