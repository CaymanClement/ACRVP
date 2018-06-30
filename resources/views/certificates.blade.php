@extends('layouts.admin')

@section('title')ACRVP | My Searches @endsection


@section('content')

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

                    <li  class="active">
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
                          </li>    
                    <li>
                        <a href="/about">
                            <span class="glyphicon glyphicon-tower"></span>&nbsp &nbsp About Us
                   
                        </a>
                    </li>              
@endsection

              <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title"> Search History</h4>
                                    <p class="category">A number of searches you have done</p>
                                </div>
                                <div class="card-content">


                             @if (session('success'))
                             <div class="alert alert-success alert-dismissable">
                             	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            		{{ session('success') }}
                             </div>
                             @elseif (session('failure'))
                             <div class="alert alert-danger alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('failure') }}
                             </div>
                             @elseif (session('warning'))
                             <div class="alert alert-warning alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('warning') }}
                             </div>
                             @endif


@foreach ($records as $reco)
<div class="panel panel-default">
  <div class="panel-body">
<div class="table-responsive">	
<table class="table">
<tr>
<td rowspan="8" style="padding: 1em;" align="center">
	<img src="images/certificate-icon.png" style="width: 210px; height: 210px;"><br><br>
  @if($reco->comment=='Found')
  <a class="btn btn-success btn-block" href="/certificates/view_cert/{{ $reco->cert_id }}">View Certificate</a><br> 
  @else
  <a class="btn btn-default btn-block disabled" href="">View Certificate (Not Found)</a><br>
  @endif
</td>

<td>Name: {{  Auth::user()->first_name }} {{  Auth::user()->mid_name }} {{  Auth::user()->last_name }} </td>
</tr>
<tr><td>Index number: {{ $reco->reg_no }}</td></tr>
<tr><td>Name of School/College/University: {{ $reco->institution }} </td></tr>
<tr><td>Certificate Type: {{ $reco->cert_type }}</td></tr>
<tr><td>Yearof completion: {{ $reco->year }} </td></tr>
<tr><td>Searched on: {{ $reco->created_at }}</td></tr>
<tr><td>Verification Status: 
  @if($reco->comment=='Found')
    <b style="color: green;">{{ $reco->comment }}</b> 
  @else 
    <b style="color: red;">{{ $reco->comment }}</b> 
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