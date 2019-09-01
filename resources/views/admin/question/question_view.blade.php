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
                    <h5 class="text-center p-2">Question Details</h5>
                </div>
            </div>



                <div class="form-group">
                    <strong>Lesson :</strong>
                    <span>{{ $question->lesson->lesson_title }}</span>
                </div>

                <div class="form-group">
                    <strong>Question :</strong>
                    <span>{{ $question->question }}</span>
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
                        <strong>Question Option :</strong>
                        <ol type="A">
                            @foreach($question->questions as $option)
                                <li>
                                    {{ $option->value }}
                                    <input type="checkbox" name="answer" id="answer" @if($option->correct === 1) checked @endif >

                                </li>

                            @endforeach
                        </ol>
                    </div>
                </div>
            <div class="form-group">
                <span>
                    <strong>Hints :</strong>
                    {{ $question->questions[0]->hints }}
                </span>

            </div>

            <div class="form-group">
                <span>
                    <strong>Explanation :</strong>
                    {{ $question->questions[0]->explanation }}
                </span>

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
                <span>
                    <strong>Score :</strong>
                    {{ $question->score }}
                </span>

            </div>

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

