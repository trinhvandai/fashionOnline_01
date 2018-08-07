@extends('layouts.app')

@section('title', 'Login page')
@section('content')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="signup-form">
                    <h2>{{ __('New User Signup!') }}</h2>
                    {!! Form::open(['method' => 'POST' , 'route' => 'register']) !!}
                        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    {!! Form::text( 'name', null, ['class' => 'form-control' , 'placeholder' => __('Your name') ]); !!}
                    {!! Form::email( 'email', null, ['class' => 'form-control' , 'placeholder' => __('Your email address') ]); !!}
                    <input type="password" class="form-control" placeholder=" {{ __('Password') }} " name="password" />
                    <input type="password" class="form-control" placeholder=" {{ __('Confirm password') }} " name="password_confirmation" />
                    {{ Form::button('Sign up', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section><!--/form-->
@endsection
