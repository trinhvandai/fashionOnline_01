@extends('layouts.app')

@section('title', "{{ __('Update your profile') }}")
@section('content')
<div class="container">
    <div class="row m-y-2">
        <!-- edit form column -->
        <div class="col-lg-4 text-lg-center">
            <h2>{{ __('Update your profile') }}</h2>
        </div>
        <div class="col-lg-8 push-lg-4 personal-info">
             <form role="form" method="POST" action="{{ route('users.update') }}" >
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                {{ csrf_field() }}
                <img src="{{ $user->image_url }}" class="m-x-auto img-fluid img-circle" alt="avatar" />
                <h6 class="m-t-2">Upload a different photo</h6>
                <label class="custom-file">
                  <input name="image_url" type="file" id="image_url" class="custom-file-input">
                  <span class="custom-file-control">Choose file</span>
                </label>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Full name</label>
                    <div class="col-lg-9">
                        <input name="name" class="form-control" type="text" value="{{ $user->name }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input name="email" class="form-control" type="email" value="{{ $user->email }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                    <div class="col-lg-9">
                        <input name="address" class="form-control" type="text" value="{{ $user->address }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Description</label>
                    <div class="col-lg-9">
                        <input name="description" class="form-control" type="text" value="{{ $user->description }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                    <div class="col-lg-9">
                        <input name="phone" class="form-control" type="text" value="" placeholder="{{ $user->phone }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                    <div class="col-lg-9">
                        <input name="password" class="form-control" type="password" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                    <div class="col-lg-9">
                        <input name="password_confirm" class="form-control" type="password" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" value="Update your profile" />
                        <input type="reset" class="btn btn-primary" value="Cancel" />
                    </div>
                </div>
            </form>
            <!-- {!! Form::close() !!} -->
        </div>
    </div>
</div>
@endsection
