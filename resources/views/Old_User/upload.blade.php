@extends('layouts.layout')

@section('title') OCV | Upload Certificate @endsection


@section('content')

<div class="panel-group">
<div class="panel panel-info">
  <div class="panel-heading"><h3>Fill the Details below and Upload your Certificate</h3></div>
  <div class="panel-body">

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
   <option value="NECTA">NECTA</option>
   <option value="NACTE">NACTE</option>
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
  </div>

@endsection