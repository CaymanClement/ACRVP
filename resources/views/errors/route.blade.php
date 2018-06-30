@extends('layouts.admin')

@section('title')
ARCVP | Not Allowed
@endsection

@section('content')
@section('menu_li')
                    
                    <li>
                    <a href="{{ URL::previous() }}">
                            <span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp &nbsp <b>Back</b>
                        </a>
                    </li>


@endsection

                <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">ACRVP - Route Restriction! </h4>
                                </div>
                                <div class="card-content">
                       <h2 class="animated flipInX">:-( Sorry the page is Not Accessible</h2>
                       <p>You do not have the role to view this page or the page is currently unavailable</p>



                                </div>
                            </div>
                        </div>
                </div>


@endsection