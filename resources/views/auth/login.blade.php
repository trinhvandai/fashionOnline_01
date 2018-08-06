@extends('layouts.app')

@section('title', 'Login page')
@section('content')
        <section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form"><!--login form-->
                            <h2>{{ __('Login to your account') }}</h2>
                            <!-- <form method="POST" action="{{url('auth/login')}}">
                                {!! csrf_field() !!}
                                <input type="email" name="email" id="email" placeholder="Email Address" />
                                <input type="password" name="password" id="password" placeholder="Password" />
                                <span>
                                    <input name="remember" id="remember" type="checkbox" class="checkbox">
                                    Keep me signed in
                                </span>
                                <button type="submit" class="btn btn-default">Login</button>
                            </form> -->
                            {!! Form::open(['method' => 'POST']) !!}
                            {!! Form::email( 'email', null, ['placeholder' => __('Your email address') ]); !!}
                             {!! Form::password('password', ['placeholder' => __('Password') ] ) !!}
                            <span>
                                {!! Form::checkbox( 'remember', null ); !!}
                                {{ __('Remember me') }}
                                <a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}
                            </a>
                            </span>
                            {!! Form::submit( __('Login') , ['class' => 'btn btn-default']) !!}
                            {!! Form::close() !!}
                        </div><!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">OR</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form"><!--sign up form-->
                            <h2>{{ __('New User Signup!') }}</h2>
                            <!-- <form method="POST" action="{{url('register')}}">
                                {!! csrf_field() !!}
                                <input type="text" name="name" id="name"  placeholder="Name">
                                <input type="email" name="email" placeholder="Email Address"/>
                                <input type="password" name="password" placeholder="Password">
                                <button type="submit" class="btn btn-default">Signup</button>
                            </form> -->
                            {!! Form::open(['method' => 'POST']) !!}
                            {!! Form::text( 'name', null, ['placeholder' => __('Your name') ]); !!}
                            {!! Form::email( 'email', null, ['placeholder' => __('Your email address') ]); !!}
                            {!! Form::password('password', ['placeholder' => __('Password') ] ) !!}
                            {!! Form::password('pasword_confirmation', ['placeholder' => __('Confirm password') ] ) !!}
                            {!! Form::submit( __('Sign up') , ['class' => 'btn btn-default']) !!}
                            {!! Form::close() !!}
                        </div><!--/sign up form-->
                    </div>
                </div>
            </div>
        </section><!--/form-->
@endsection
