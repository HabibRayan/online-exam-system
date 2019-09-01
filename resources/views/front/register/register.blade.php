@extends('front.master')

@section('content')
<div class="container">
    <div class="wrap">
        <div class="row m-2">
            <div class="col-md-3"></div>
            <div class="col-md-6  bg-light shadow">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <h5 class="text-center p-2">Register</h5>
                    </div>
                </div>

                <form class="mt-2" action="{{ url('register/store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input type="text" class="form-control" name="user_name" id="user_name" value="{{ old('user_name') }}">
                        <span class="text-danger">{{ $errors->first('user_name')  }}</span>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}">
                            <span class="text-danger">{{ $errors->first('first_name')  }}</span>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                            <span class="text-danger">{{ $errors->first('last_name')  }}</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="miu_id">MIU ID</label>
                        <input type="text" class="form-control" id="miu_id" name="miu_id" value="{{ old('miu_id') }}">
                        <span class="text-danger">{{ $errors->first('miu_id')  }}</span>

                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        <span class="text-danger">{{ $errors->first('email')  }}</span>

                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <span class="text-danger">{{ $errors->first('password')  }}</span>

                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        <span class="text-danger">{{ $errors->first('password_confirmation')  }}</span>

                    </div>

                    <div class="form-group">
                        <button class="btn btn-sm btn-primary" type="submit" name="btn_submit" id="btn_save">Submit</button>
                        <span> Already Registered? <a href="{{ url('login') }}">Login</a></span>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
    @endsection
