@extends('layouts.blocked')

@section('title')
ARCVP | Blocked
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
                                    <h4 class="title">ACRVP - Blocked! </h4>
                                </div>
                                <div class="card-content">
                       <h2 class="animated flipInX">:-( Sorry you are Blocked!</h2>
                       <p>Please contact admin! For futher reasons</p>



                                </div>
                            </div>
                        </div>
                </div>


@endsection