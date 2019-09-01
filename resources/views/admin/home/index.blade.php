@extends('admin.master')

@section('title')
    Dashboard
    @endsection

@section('content')
    <div class="col-md-9">
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
                        <p class="card-text">{{ $value->lesson_description }}...<a href="{{ url('/admin/home/see/more/'.$value->lesson_id) }}">See more</a> </p>
                        <span></span>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $value->created_at->diffForHumans() }}
                    </div>
                </div>
                @endforeach


    </div>

    @endsection
