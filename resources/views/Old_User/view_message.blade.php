@extends('layouts.admin')

@section('title')
ACVP | View Message
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
                                    <h4 class="title">Subject: {{ $findmsg->subject }} </h4>
                                    <p class="category">From: {{ $findmsg->sender }}</p>
                                </div>
                                <div class="card-content">
                       <b>Content:</b> <p>{{ $findmsg->content }}</p>



                                </div>
                            </div>
                        </div>
                </div>


@endsection