@extends('layouts.user')

@section('title')
ARCVP | Error
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
                                    <h4 class="title">ACRVP - Error! </h4>
                                </div>
                                <div class="card-content">
                       <h2 class="animated flipInX">:-( Sorry Something Went Wrong!</h2>
                       <p>The page is currently unavailable. If you continue seeing this message please contact admin!</p>



                                </div>
                            </div>
                        </div>
                </div>


@endsection