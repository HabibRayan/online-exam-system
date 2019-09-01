@extends('admin.master')

@section('title')
    category edit
@endsection

@section('content')


    <div class="col-md-9">
        <div class="row mt-2">
            <div class="col-sm-3">
                <a href="{{ url('admin/category') }}" class="btn btn-sm btn-success">Back</a>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-2"></div>
            <div class="col-md-8  bg-light shadow">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <h5 class="text-center p-2">Edit Category Info</h5>
                    </div>
                </div>

                <form class="mt-2" action={{ route('category.edit', ['id' => $category->category_id]) }}" method="POST">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" name="category_name"  id="category_name" value="{{ $category->category_name }}">
                    <span class="text-danger">{{ $errors->first('category_name') }}</span>

                </div>

                <div class="form-group">
                    <label for="category_description">Description</label>
                    <textarea class="form-control" name="category_description" id="category_description" rows="3">{{ $category->category_description }}</textarea>
                    <span class="text-danger">{{ $errors->first('category_description') }}</span>

                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-primary" name="btn_save" id="btn_save">Update</button>
                </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>



    </div>
@endsection
