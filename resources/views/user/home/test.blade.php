@extends('user.master')

@section('title')
    test
@endsection

@section('content')
    <div class="container">
        <div class="wrap">
            <div class="row mt-2">
                <div class="col-md-3">
                    <a href="{{ url('user') }}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-10 bg-light shadow">
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <h5 class="text-center p-2">Question Details</h5>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php $i=1; ?>
                        <form action="{{ url('/user/test')}}" method="post">
                            @csrf

                            <input type="hidden" name="lesson_id" id="lesson_id" value="{{ $lesson->lesson_id }}">

                            @php
                                $rand = random_int(9, 99);
                                if($rand % 2 == 0) {
                                    $questions = $lesson->questionInfo()->orderBy('question')->get();
                                }
                                if ($rand % 3 == 0) {
                                    $questions = $lesson->questionInfo()->orderByDesc('question')->get();
                                }
                                else {
                                    $questions = $lesson->questionInfo()->orderBy('updated_at')->get();
                                }
                            @endphp

                            @foreach($questions as $index => $question)
                                <div >
                                    <strong>Question <?php echo $i++;?> :</strong>
                                    <span>{{ $question->question }} </span><br>
                                    <strong>Question Option :</strong>
                                    <ol type="A">
                                        @foreach($question->questions as $option)
                                            <li>
                                                <input type="checkbox" name="answer[]" value="{{$option->qd_id}}" id="answer">
                                                {{ $option->value }}
                                            </li>
                                        @endforeach
                                    </ol>
                                    <div class="form-group">
                                        <span>
                                            <strong>Hints :</strong>
    {{--                                            {{ $question->questions[0]->hints }}--}}
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <span>
                                            <strong>Explanation :</strong>
    {{--                                        {{ $question->questions->explanation }}--}}
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <span>
                                            <strong>Difficulty Level :</strong>
                                            {{ $question->score }}
                                        </span>
                                    </div>
                                    <hr>

                                </div>

                                @break($index == 4)
                            @endforeach
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-info">Submit</button>
                                </div>
                        </form>

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


                </div>
            </div>
        </div>
    </div>
    <br>

    @endsection
