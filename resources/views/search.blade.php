@extends('layouts.admin')

@section('title') ACRVP | Search Certificate @endsection


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

              <div class="card  col-lg-10 col-lg-offset-1">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title"> Search Certificate</h4>
                                    <p class="category">Fill the Details below and Search your Certificate Record</p>
                                </div>
                                <div class="card-content">

  	

<form method="post" action="{{URL::to('/search_records')}}">

<input name="_token" type="hidden" value="{{ csrf_token() }}"/>


<div class="form-group {{ $errors->has('index_no') ? 'has-error' : '' }}">
 <label>Index number:</label>
 <input type="text" name="index_no" class="form-control" placeholder="Enter Index No." required>
 <span class="text-danger">{{ $errors->first('index') }}</span>
</div>



<div class="form-group {{ $errors->has('school') ? 'has-error' : '' }}">
 <label>Institution - School / College / University:</label>
      <select name="school" class="form-control" required>
      <option value="">Choose Institution: </option>
      @foreach($inst as $ist)
      <option value="{{ $ist->org_name }}">{{ $ist->org_name }}</option>
      @endforeach
      </select>   
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

<div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
 <label>Year of study:<span class="text-danger">{{ $errors->first('year') }}</span>
 <span class="text-danger">{{ $errors->first('year') }}</span></label>
 <div class="row">
  
<div class="col-lg-6">
<div class="form-group {{ $errors->has('year_from') ? 'has-error' : '' }}">
<input type="text" name="year_from" class="form-control" placeholder="From" pattern="[0-9]{4}" required>
</div>
</div>

<div class="col-lg-6">
<div class="form-group {{ $errors->has('year_to') ? 'has-error' : '' }}"> 
<input type="text" name="year_to" class="form-control" placeholder="To" pattern="[0-9]{4}" required>

</div>
</div>

</div>

<input type="hidden" name="fname" value="{{ Auth::user()->first_name }}" />
<input type="hidden" name="mname" value="{{ Auth::user()->mid_name }}" />
<input type="hidden" name="lname" value="{{ Auth::user()->last_name }}" />
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

<button type="submit" class="btn btn-danger btn-block">Search Certificate Record</button>
<br><br>
</form> 
</div></div>

@endsection