@extends('user.master')

@section('title')
    user Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="wrap">
            <div class="mt-2">
                <div class="col-md-3">
                    <a href="{{ url('/user') }}" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card mb-3 mt-3 text-dark">
                    <div class="card-header">
                        <strong>Category :</strong>
                        {{ $lessons->category->category_name }}

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $lessons -> lesson_title}}</h5>
                        <p class="card-text">{{ $lessons->lesson_description }}</p>
                        <span>{{ $lessons->lesson_text}}</span>
                    </div>

                    <div class="m-2">
                        <div class="col-md-3">
                            <a href="{{ url('user/test/'.$lessons->lesson_id) }}" class="btn btn-sm btn-info">Test</a>
                        </div>
                    </div>

                    <div class="card-footer text-muted">
                        {{ $lessons->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
