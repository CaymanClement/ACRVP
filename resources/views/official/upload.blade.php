@extends('layouts.admin')

@section('title') ACRVP | Upload Certificate @endsection


@section('content')
@section('menu_li')
                    
                    <li>
                        <a href="/official/home">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp &nbsp Dashboard
                        </a>
                    </li>

                    <li class="active">
                        <a href="/official/upload">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Upload Certificate
                            
                        </a>
                    </li>

                    <li>
                        <a href="/official/certificates">
                            <span class="glyphicon glyphicon-tasks"></span>&nbsp &nbsp Certificates
              
                        </a>
                    </li>
                        

                    <li>
                        <a href="/official/users">
                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp &nbsp System Users
            
                        </a>
                    </li>
                    <li>
                        <a href="/official/messages">
                            <span class="glyphicon glyphicon-comment"></span>&nbsp &nbsp Messages
                         
                        </a>
                    </li>
                    <li>
                        <a href="/official/announcements">
                            <span class="glyphicon glyphicon-bullhorn"></span>&nbsp &nbsp Announcements
                         
                        </a>
                    </li>
                    <li>
                        <a href="/official/profile">
                            <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp Profile
                            
                        </a>
                    </li>

@endsection
              <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title"> Upload Certificate Record</h4>
                                    <p class="category">Fill the Details below to Upload Certificate Record</p>
                                </div>
                                <div class="card-content">

      @if(Session::has('error'))

      <div class="alert alert-warning">

        {{ Session::get('error') }}

      </div>
      @endif
  	

<form role="form" method="post" action="{{URL::to('/upload/up')}}" enctype="multipart/form-data" >

  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

<div class="row">
<div class="form-group {{ $errors->has('fname') ? 'has-error' : '' }} col-lg-4">
 <label>First Name:</label>
 <input type="text" name="fname" class="form-control" pattern="[A-Za-z]*" required>
 <span class="text-danger">{{ $errors->first('fname') }}</span>
</div>

<div class="form-group {{ $errors->has('mname') ? 'has-error' : '' }} col-lg-4">
 <label>Middle Name:</label>
 <input type="text" name="mname" class="form-control" pattern="[A-Za-z]*">
 <span class="text-danger">{{ $errors->first('mname') }}</span>
</div>

<div class="form-group {{ $errors->has('lname') ? 'has-error' : '' }} col-lg-4">
 <label>Last Name:</label>
 <input type="text" name="lname" class="form-control" pattern="[A-Za-z]*" required>
 <span class="text-danger">{{ $errors->first('lname') }}</span>
</div>

</div>

<div class="form-group {{ $errors->has('certificate_id') ? 'has-error' : '' }}">
 <label>Certificate ID:</label>
 <input type="text" name="certificate_id" class="form-control" pattern="[0-9]*" required>
 <span class="text-danger">{{ $errors->first('certificate_id') }}</span>
</div>

<div class="form-group {{ $errors->has('index_no') ? 'has-error' : '' }}">
 <label>Index number:</label>
 <input type="text" name="index_no" class="form-control" required>
 <span class="text-danger">{{ $errors->first('index') }}</span>
</div>



<div class="form-group {{ $errors->has('school') ? 'has-error' : '' }}">
 <label>School / College / University:</label>
 <input type="text" disabled name="school" value="{{ Auth::user()->organization }}" class="form-control" required>
 <span class="text-danger">{{ $errors->first('school') }}</span>
</div>


 <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
   <label>Certificate Type:</label>

 <select name="type" class="form-control" required>
   <option value="">Choose Type: </option>
   <option value="ACSE">ACSE</option>
   <option value="CSEE">CSEE</option>
   <option value="Bachelor Degree">Bachelor Degree</option>
   <option value="Certificate">Certificate</option>
   <option value="Diploma">Diploma</option>
   <option value="Advanced Diploma">Advanced Diploma</option>
   <option value="Masters">Masters</option>
   <option value="Phd Doctorate">Phd Doctorate</option>
 </select>
<span class="text-danger">{{ $errors->first('type') }}</span>
 </div>



<div class="form-group {{ $errors->has('grade') ? 'has-error' : '' }}">
   <label>Grade:</label>

 <select name="grade" class="form-control" required>
   <option value="">Choose Grade: </option>
   <option value="Distinction">Distinction</option>
   <option value="Merit">Merit</option>
   <option value="Credit">Credit</option>
   <option value="Pass">Pass</option>
   <option value="Fail">Fail</option>
   <option value="First Class">First Class</option>
   <option value="Upper Second">Upper Second</option>
   <option value="Lower Second">Lower Second</option>   
   <option value="Division I">Division I</option>
   <option value="Division II">Division II</option>
   <option value="Division III">Division III</option>
   <option value="Division IV">Division IV</option>
 </select>
<span class="text-danger">{{ $errors->first('grade') }}</span>
 </div>




 <label>Year of study:</label>
 <div class="row">
  
<div class="col-lg-6">
<div class="form-group {{ $errors->has('year_from') ? 'has-error' : '' }}">
<input type="text" name="year_from" class="form-control" pattern="[0-9]{4}" minlength="4" maxlength="4" placeholder="From" required>
<span class="text-danger">{{ $errors->first('year') }}</span>
</div>
</div>

<div class="col-lg-6">
<div class="form-group {{ $errors->has('year_to') ? 'has-error' : '' }}"> 
<input type="text" name="year_to" class="form-control" pattern="[0-9]{4}" minlength="4" maxlength="4" placeholder="To" required>
<span class="text-danger">{{ $errors->first('year') }}</span>
</div>
</div>

</div>

<div class="form-group {{ $errors->has('fileuploaded') ? 'has-error' : '' }}">
 <label>Select upload file (PDF Only):</label>
  <input type="file" name="fileuploaded" class="form-control" placeholder="Upload File" required>
<span class="text-danger">{{ $errors->first('file') }}</span>
</div> 
<input type="hidden" name="owner_id" value="{{ Auth::user()->id }}" />

 <button type="submit" class="btn btn-danger btn-block">Upload Record</button>
</form> 
</div></div>

@endsection