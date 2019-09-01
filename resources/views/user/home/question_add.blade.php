@extends('user.master')

@section('title')
    user question add
@endsection

@section('content')
    <div class="container">
        <div class="wrap">
            <div class="row m-2">
                <div class="col-md-2"></div>
                <div class="col-md-8 bg-light shadow">
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <h5 class="text-center p-2">Create Question</h5>
                        </div>
                    </div>

                    <form class="mt-2" id="user_question_id" action="{{ url('/user/question/store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input type="text" class="form-control" name="question" id="question">
                            <span class="text-danger">{{ $errors->first('question') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="lesson_id"><strong>Lesson :</strong>{{ $lessons->lesson_title }}  :</label>
                            <input type="hidden" name="lesson_id" id="lesson_id" value="{{ $lessons->lesson_id }}">

                        </div>

                        {{--                <div class="dropdown">--}}
                        {{--                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">--}}
                        {{--                        Question Type--}}
                        {{--                    </button>--}}
                        {{--                    <div class="dropdown-menu">--}}
                        {{--                        <h5 class="dropdown-header" >Select Question Type</h5>--}}
                        {{--                        <div class="dropdown-item" id="multiple_choice" style="cursor: pointer;">M.C.Q</div>--}}
                        {{--                        <div class="dropdown-item" id="true_or_false" style="cursor: pointer;">True/False</div>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}

                        {{--                Multiple Question--}}

                        <div class="row">
                            <div class="col-md-12"  id="multiple_question">
                                <label for="multiple_question">Multiple Question</label>
                                @for($question=1; $question<=4;$question++)
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="value_{{$question}}" id="value_{{$question}}" aria-label="Text input with checkbox">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="hidden" name="correct_{{$question}}" id="correct_{{$question}}" value="0" aria-label="Checkbox for following text input">
                                                <input type="checkbox" name="correct_{{$question}}" id="correct_{{$question}}" value="1" aria-label="Checkbox for following text input"> Correct
                                            </div>
                                        </div>

                                    </div>
                                @endfor

                            </div>
                        </div>

                        {{--        True or false --}}

                        {{--                <div class="form-group" id="true_or_false_select">--}}
                        {{--                    <label for="multiple_question">True/False</label>--}}
                        {{--                    <div class="input-group mb-3">--}}
                        {{--                        <div class="input-group-prepend">--}}
                        {{--                            <div class="input-group-text">--}}
                        {{--                                <input type="radio" name="true_or_false" value="1" aria-label="Checkbox for following text input"> True--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="input-group mb-3">--}}
                        {{--                        <div class="input-group-prepend">--}}
                        {{--                            <div class="input-group-text">--}}
                        {{--                                <input type="radio" name="true_or_false" value="1" aria-label="Checkbox for following text input"> False--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}

                        <div class="form-group">
                            <label for="hints">Hints</label>
                            <input type="text" class="form-control" name="hints" id="hints"/>
                            <span class="text-danger">{{ $errors->first('hints') }}</span>

                        </div>

                        <div class="form-group">
                            <label for="explanation">Explanation</label>
                            <input type="text" class="form-control" name="explanation" id="explanation"/>
                            <span class="text-danger">{{ $errors->first('explanation') }}</span>

                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control" value="1" name="score" id="score"/>
                            <span class="text-danger">{{ $errors->first('score') }}</span>

                        </div>

                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" name="btn_save" id="btn_save">Save</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>




    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('#multiple_question').hide();--}}
    {{--            $('#true_or_false_select').hide();--}}


    {{--            $('#multiple_choice').click(function () {--}}
    {{--                $('#multiple_question').show() ;--}}
    {{--                $('#true_or_false_select').hide();--}}
    {{--            });--}}

    {{--            $('#true_or_false').click(function () {--}}
    {{--                $('#multiple_question').hide() ;--}}
    {{--                $('#true_or_false_select').show();--}}
    {{--            });--}}

    {{--        });--}}
    {{--    </script>--}}

    <script>
        document.forms['user_question_id'].elements['lesson_id'].value='{{ $lessons->lesson_id }}';

    </script>

@endsection

