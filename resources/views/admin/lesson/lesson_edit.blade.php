@extends('admin.master')

@section('title')
    lesson edit
@endsection

@section('content')
    <div class="row mt-2">
        <div class="col-md-12">
            <a href="{{ url('admin/lesson') }}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
    <div class="row bg-light mt-2 shadow">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <h5 class="text-center p-2">Edit Lesson Info</h5>
                </div>
            </div>

            <form name="edit_lesson_form" class="mt-2"  action="{{ route('lesson.edit', ['id' => $lessonsId->lesson_id]) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{ $lessonsId->lesson_title }}" name="lesson_title" id="lesson_title">
                </div>

                <div class="form-group">
                    <label for="category">Lesson Category</label>
                    <select name="lesson_category_id" id="lesson_category_id" class="form-control">
                        <option >Select Category
                        @foreach($categories as $category)
                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="minute">Minute</label>
                    <input type="number" class="form-control" value="{{ $lessonsId->lesson_minute }}" name="lesson_minute" id="lesson_minute"/>

                </div>

                <div class="form-group">
                    <label for="short_description">Description</label>
                    <textarea class="form-control" maxlength="120" name="lesson_description" id="lesson_description" rows="2">{{ $lessonsId->lesson_description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="lesson_text">Lesson Text</label>
                    <textarea class="form-control" name="lesson_text" id="lesson_text" rows="3">{{ $lessonsId->lesson_text }}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-primary" name="btn_save" id="btn_save">Update</button>
                </div>
            </form>
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

        document.forms['edit_lesson_form'].elements['lesson_category_id'].value='{{ $lessonsId->lesson_category_id }}';
    </script>
@endsection
