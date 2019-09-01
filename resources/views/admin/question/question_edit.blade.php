@extends('admin.master')

@section('title')
    question
@endsection

@section('content')
    <div class="row mt-2">
        <div class="col-sm-3">
            <a href="{{ url('admin/lesson/question') }}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-2"></div>
        <div class="col-md-8 bg-light shadow">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <h5 class="text-center p-2">Update Question</h5>
                </div>
            </div>

            <form class="mt-2" action="{{ url('/admin/question/update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="question">Question</label>
                    <input type="text" class="form-control" name="question" id="question" value="{{ $questionDetails[0]->question }}">
                </div>

                <div class="form-group">
                    <label for="lesson_id">Select Lesson</label>
                    <select class="form-control" name="lesson_id" id="lesson_id">
                        <option>Select Lesson </option>
                        @foreach($lessons as $lesson)
                            <option value="{{ $lesson->lesson_id }}" >{{ $lesson->lesson_title }} </option>
                        @endforeach
                    </select>
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
                                <input type="text" class="form-control" name="value_{{$question}}" id="value_{{$question}}"  aria-label="Text input with checkbox">
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
                </div>

                <div class="form-group">
                    <label for="explanation">Explanation</label>
                    <input type="text" class="form-control" name="explanation" id="explanation"/>
                </div>

                <div class="form-group">
                    <label for="score">Score</label>
                    <input type="number" class="form-control" value="1" name="score" id="score"/>
                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-primary" name="btn_save" id="btn_save">Update</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
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

@endsection

