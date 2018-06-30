@extends('layouts.user')

@section('title') ACRVP | Login @endsection


@section('content')


    <div class="row">
        <div class="col-md-5 col-md-offset-3">
          
                <div class="card animated slideInLeft">
                                <div class="card-header" data-background-color="red">
                                    <p class="title" align="center">LOGIN</p>
                                    
                                </div>
                                <div class="card-content">

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">

                                   <label class="col-md-offset-2">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label><br>

                    
                                 Not a member? 
                                <a href="{{ route('register') }}"> Register</a>
                            </div>
                        </div>

                           <button type="submit" class="btn btn-danger btn-block">
                                    Login
                                </button>                

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
