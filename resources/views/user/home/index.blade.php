@extends('user.master')

@section('title')
    user
    @endsection
@section('content')
    <div class="container">
        <div class="wrap">
            <div class="col-md-"></div>
            <div class="col-md-10">
                <div class="card mt-2">
                    <div class="card-header">
                        Select Lesion To Start
                    </div>
                </div>


                @foreach($lesson as $value )
                    <div class="card mb-3 mt-3 text-dark">
                        <div class="card-header">
                            <strong>Category :</strong>
                            {{ $value->category->category_name }}

                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $value -> lesson_title}}</h5>
                            <p class="card-text">{{ $value->lesson_description }}...<a href="{{ url('user/see/more/'.$value->lesson_id) }}">See more</a> </p>
                            <span></span>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $value->created_at->diffForHumans() }}
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="howWork-heading">
                                        <h2 class="text-center">How It Works ?</h2>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="howWork-icon text-center">
                                        <a href="#"><i class="fa fa-play-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    @endsection
