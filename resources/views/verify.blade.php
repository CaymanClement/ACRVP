@extends('layouts.admin')

@section('title') ACRVP | Verify Certificate @endsection


@section('content')

@section('menu_li')
                    <li>
                    <a href="/">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp &nbsp Home
                        </a>
                    </li>

                    <li class="active">
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

                          <li>
                        <a href="/about">
                            <span class="glyphicon glyphicon-tower"></span>&nbsp &nbsp About Us
                   
                        </a>
                    </li>            
@endsection

              <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title"> Verify Certificate</h4>
                                    <p class="category">Fill the Details below and Verify your Certificate</p>
                                </div>
                                <div class="card-content">

      @if(Session::has('error'))

      <div class="alert alert-warning">

        {{ Session::get('error') }}

      </div>
      @endif
  	

<form role="form" method="post" action="{{URL::to('/upload/up')}}" enctype="multipart/form-data" >

  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>


<div class="form-group {{ $errors->has('certificate_id') ? 'has-error' : '' }}">
 <label>Certificate ID:</label>
 <input type="text" name="certificate_id" class="form-control">
 <span class="text-danger">{{ $errors->first('certificate_id') }}</span>
</div>

<div class="form-group {{ $errors->has('index_no') ? 'has-error' : '' }}">
 <label>Index number:</label>
 <input type="text" name="index_no" class="form-control">
 <span class="text-danger">{{ $errors->first('index') }}</span>
</div>



<div class="form-group {{ $errors->has('school') ? 'has-error' : '' }}">
 <label>School / College / University:</label>
 <input type="text" name="school" class="form-control">
 <span class="text-danger">{{ $errors->first('school') }}</span>
</div>


 <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
   <label>Certificate Type:</label>

 <select name="type" class="form-control">
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
<span class="text-danger">{{ $errors->first('certificate') }}</span>
 </div>



<div class="form-group {{ $errors->has('grade') ? 'has-error' : '' }}">
   <label>Grade:</label>

 <select name="grade" class="form-control">
   <option value="">Choose Grade: </option>
   <option value="Distinction">Distinction</option>
   <option value="Merit">Merit</option>
   <option value="Credit">Credit</option>
   <option value="Pass">Pass</option>
   <option value="Fail">Fail</option>
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
<input type="text" name="year_from" class="form-control" placeholder="From">
<span class="text-danger">{{ $errors->first('year') }}</span>
</div>
</div>

<div class="col-lg-6">
<div class="form-group {{ $errors->has('year_to') ? 'has-error' : '' }}"> 
<input type="text" name="year_to" class="form-control" placeholder="To">
<span class="text-danger">{{ $errors->first('year') }}</span>
</div>
</div>

</div>

<div class="form-group {{ $errors->has('fileuploaded') ? 'has-error' : '' }}">
 <label>Select upload file (PDF Only):</label>
  <input type="file" name="fileuploaded" class="form-control"/>
<span class="text-danger">{{ $errors->first('file') }}</span>
</div> 
<input type="hidden" name="owner_id" value="{{ Auth::user()->id }}" />

 <button type="submit" class="btn btn-default">Upload Certificate</button>
</form> 
</div></div>

@endsection