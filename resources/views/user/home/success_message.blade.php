@extends('user.master')

@section('title')
    complete
@endsection

@section('content')
    <div class="container">
        <div class="wrap">
            <div class="row m-2">
                <div class="col-md-10 bg-light shadow m-2">
                    <div class="row">
                        <div class="col-md-12 m-2">
                            <h5 class="text-center p-2">Congratulation!</h5>


                        </div>
                        <div class="text-center m-2 col-md-12">
                           Your Test Compete Successfully
                            <a href="{{ url('user') }}">Learn More Lesson?</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
