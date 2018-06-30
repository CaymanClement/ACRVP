@extends('layouts.admin')

@section('title') ACRVP | About Us @endsection

@section('styles')
<link href="{{ asset('mdbootstrap/css/mdb.css') }}" type="text/css" rel="stylesheet">
@endsection
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
                    <li>
                        <a href="/profile">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Profile
                          
                        </a>
                    </li>    
                    <li class="active">
                        <a href="/about">
                            <span class="glyphicon glyphicon-tower"></span>&nbsp &nbsp About Us
                   
                        </a>
                    </li>

                
@endsection

@section('content')

<div class="row">
<div class="panel-group">
<div class="col-lg-8">
<div class="panel panel-danger animated bounceInLeft">
  <div class="panel-heading"><b>About Us</b></div>
  <div class="panel-body">Cut overall expenses, reduce financial risk, and combat academic fraud.
	The Clearinghouse instantly, accurately, and securely verifies enrollment and graduation information for students of most public and private 
<br><br>
This system eases the management and verification process of academic certificates records required by different organizations/recruiters in application of a certain post where they will search for a particular certificate record in the system to see if they are valid or not. The system allows graduates to search for their certificates and get their certificates details which are uploaded by the issued institution; once the certificate details are uploaded a graduate will be safe from certificate details loss or verification trouble such as being sent to advocates several times of which they incur cost.
<br><br>

Information and Communication Technology is one of the divers industries in the world which are increasing development in a certain country. Verification is the process of establishing the truth, accuracy, or validity of something such as the verification of official documents (Nicholas Musee, 2015). Most of applicants falsify their educational credentials. What's more, industry experts cite academic fraud as the most common lie on resumes. This poses the greatest dander to organization. This has been accelerated by applicants who falsify the information. The risks involved of not verifying applicants certificate details includes, greater recruiting and replacement costs, increased employee turnover, compromised business performance, embarrassment and negative impact to an organization's reputation, declining market value, cost customers and revenue and civil and criminal liability.
<br><br>

In Africa as time goes by the rate of growing of ICT technology increases as time to time though in Africa, most of the institutions and organizations rely on use traditional paper records verification methods to verify the documents presented to them. These organizations/Institutions do not have the enough capacity to verify the documents presented to them instantly. One  of the problems we have in traditional paper based is that people and especially  recruiters   and  employers  find difficult  in  knowing the  validity  of  documents  such  as  academic  certificates  presented  to  them because there is no way they can authenticate those documents instantly. In the current scenario most  of  the  organization  does  not  have  the  capacity  to  instantly  authenticate  the  documents presented. Traditional identity information verification and validation processes were developed in a human/paper transaction world
</div>
</div>
</div>


<div class="col-lg-4">
<div class="panel panel-danger animated bounceInRight">
  <div class="panel-heading"><b>Contact Us</b></div>
  <div class="panel-body">
    <h4>Caystar Inventions</h4>
    <b>Email:</b> info@clemerz.com<br>
    <b>Phone:</b> 0713214583<br>
    <b>Adress:</b> P.O.Box 77596 Dar es Salaam<br>
  </div>
</div>

<br>

<div class="panel panel-danger animated flipInX">
	<div class="panel-heading"><b>Contact US Form</b></div>
	<div class="panel-body">
                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                             	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            		{{ session('success') }}
                             </div>
                             @endif
		 
	<form role="form" method="post" action="{{URL::to('/about/contact-us')}}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>

		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

<label>Name: <span class="text-danger">{{ $errors->first('name') }}</span></label>
<input type="text" name="name" class="form-control" placeholder="name" required>

			

		</div>


		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
<label>Email: <span class="text-danger">{{ $errors->first('email') }}</span></label>
<input type="text" name="email" class="form-control" placeholder="Enter Email" required>

			

		</div>


		<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
<label>Message: <span class="text-danger">{{ $errors->first('message') }}</span></label>
<textarea name="message" class="form-control" placeholder="Enter Message" required></textarea>

			

		</div>


		<div class="form-group">

			<button class="btn btn-success" type="submit">Contact US!</button>

		</div>
	
</form>
</div>
</div>
  <div>
     <br><br>. 
    </div>
</div>



@endsection