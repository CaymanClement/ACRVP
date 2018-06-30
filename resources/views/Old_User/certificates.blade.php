@extends('layouts.layout')

@section('title')OCV | My Certificates @endsection


@section('content')
<div class="panel panel-info">
<div class="panel-heading"><h3>My Certificates</h3></div>
  <div class="panel-body">



                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                             	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            		{{ session('success') }}
                             </div>
                             @elseif (session('warning'))
                             <div class="alert alert-warning alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('warning') }}
                             </div>
                             @endif





@foreach ($user_certificates as $cert)
<div class="panel panel-default">
  <div class="panel-body">
<div class="table-responsive">	
<table class="table">
<tr>
<td rowspan="8" style="padding: 1em;" align="center">
	<img src="images/certificate-icon.png" width="170px" height="170px"><br><br>
  <a class="btn btn-primary btn-block" href="/certificates/view_cert/{{ $cert->id }}">View Certificate</a><br>

  @if($cert->status=='Verified')
  <a class="btn btn-warning btn-block disabled" href="">Edit Certificate</a><br>
  <a class="btn btn-danger btn-block disabled" href="">Delete Certificate</a>
  @else
  <a class="btn btn-warning btn-block" href="/certificates/view_cert/{{ $cert->id }}">Edit Certificate</a><br>
  <a class="btn btn-danger btn-block" href="">Delete Certificate</a>
  @endif

 
</td>

<td>Name: {{  Auth::user()->name }} </td>
</tr>
<tr><td>Index number: {{ $cert->index_no }}</td></tr>
<tr><td>Name of School/College/University: {{ $cert->school }}</td></tr>
<tr><td>Certificate Type: {{ $cert->type }}</td></tr>
<tr><td>Year(s) of Study: {{ $cert->year_from }} - {{ $cert->year_to }}</td></tr>
<tr><td>Uploaded on: {{ $cert->created_at }}</td></tr>
<tr><td>Verification Status: 
  @if($cert->status=='Verified')
    <b style="color: green;">{{ $cert->status }}</b> 
  @else 
    <b style="color: red;">{{ $cert->status }}</b> 
  @endif 
  </td>
<td></td></tr>

</table>
</div>

  </div>
</div>
@endforeach



  </div></div>
@endsection