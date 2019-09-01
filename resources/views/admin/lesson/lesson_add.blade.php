@extends('admin.master')

@section('title')
    lesson add
@endsection

@section('content')
    <div class="row mt-2">
        <div class="col-md-3">
            <a href="{{ url('admin/lesson') }}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
<div class="row mt-2">

    <div class="col-md-12  bg-light shadow">
        <div class="row">
            <div class="col-md-12 mt-2">
                <h5 class="text-center p-2">Add Lesson Info</h5>
            </div>
        </div>

        <div>
            <form class="mt-2" action="{{ url('/admin/lesson/save') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="lesson_title">Title</label>
                    <input type="text" class="form-control" name="lesson_title" id="lesson_title">
                    <span class="text-danger">{{ $errors->first('lesson_title') }}</span>

                </div>

                <div class="form-group">
                    <label for="lesson_category_id">Lesson Category</label>
                    <select name="lesson_category_id" id="lesson_category_id" class="form-control">
                        <option >Select Category
                        @foreach($categories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label for="lesson_minute">Minute</label>
                    <input type="number" class="form-control" name="lesson_minute" id="lesson_minute"/>
                    <span class="text-danger">{{ $errors->first('lesson_minute') }}</span>

                </div>

                <div class="form-group">
                    <label for="lesson_description">Description</label>
                    <textarea class="form-control" maxlength="120" name="lesson_description" id="lesson_description" rows="2"></textarea>
                    <span class="text-danger">{{ $errors->first('lesson_description') }}</span>
                </div>

                <div class="form-group">
                    <label for="lesson_text">Lesson Text</label>
                    <textarea class="form-control" name="lesson_text" id="lesson_text" rows="3"></textarea>
                    <span class="text-danger">{{ $errors->first('lesson_text') }}</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-primary" name="btn_save" id="btn_save"> Continue <i class="fa fa-arrow-right"></i></button>
                </div>
            </form>
        </div>

    </div>
</div>


@endsection

@section('script')
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script>
        // tinymce.init({
        //     selector: 'textarea#lesson_text'
        //
        //
        // });
    </script>
@endsection
