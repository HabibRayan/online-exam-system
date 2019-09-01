@extends('user.master')

@section('title')
    test score
@endsection

@section('content')
    <div class="container">
        <div class="wrap">
            <div class="row mt-2">
                <div class="col-md-3">
                    <a href="{{ url('user') }}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-md-10 bg-light shadow">
                    <div class="row">
                        <div class="col-md-12 mt-2">

                            <h5 class="text-center p-2">Your Score : {{$scores['scoreResult']}}

                            </h5>

                        </div>
                        <div class="col-md-12 mb-2">
                            @if($scores['scoreResult'] < 4)
                                <div class="text-center">
                                    <h2 class="team-content">You Failed</h2>
                                    <a href="{{ url('user/see/more/'.$scores['lessonid']) }}">Learn More Lesson</a>
                                </div>

                            @elseif($scores['scoreResult'] >= 4)
                                <a href="{{ url('/user/question/add/'.$scores['lessonid']) }}"  class="btn btn-sm btn-primary">Add Question</a>
                                @endif
{{--                            @foreach($lessonId as $lesson)--}}
{{--                            @endforeach--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
