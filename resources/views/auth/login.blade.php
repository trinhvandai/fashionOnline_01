@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
=======
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="login-form"><!--login form-->
                    <h2>{{ __('Login to your account') }}</h2>
                    {!! Form::open(['method' => 'POST' , 'route' => 'login']) !!}
                        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    {!! Form::text( 'email', null, ['type' => 'email' , 'class' => 'form-control' ,  'placeholder' => __('Your email address') ]); !!}
                     {!! Form::password('password', ['class' => 'form-control' , 'placeholder' => __('Password') ] ) !!}
                    <span>
                        {!! Form::checkbox( 'remember', null ); !!}
                        {{ __('Remember me') }}
                    </span>
                    {{ Form::button('Sign in', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
                    {!! Form::close() !!}
                    </div><!--/login form-->
                    <div class="btn-toolbar" role="toolbar" aria-label="...">
                        <a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a>
                        <a class="btn btn-link" href="{{ route('register') }}"> {{ __('Sign up') }}</a>
                    </div>
            </div>
        </div>
    </div>
</section><!--/form-->
>>>>>>> 67dd67153f16cdc53dfcdfaa1e04f3dfabe55f93
@endsection
