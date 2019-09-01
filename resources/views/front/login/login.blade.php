@extends('front.master')

@section('content')
    <div class="container">
        <div class="wrap">
            <div class="row m-2">
                <div class="col-md-3"></div>
                <div class="col-md-5  bg-light shadow">
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <h5 class="text-center p-2">Login</h5>
                        </div>
                    </div>

                    <form class="mt-2" action="{{ url('login') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <span class="text-danger">{{ $errors->first('password') }}</span>

                        </div>

                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" type="submit">Login</button>
                            <span> Not Registered? <a href="{{ url('register') }}">Register</a></span>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection
