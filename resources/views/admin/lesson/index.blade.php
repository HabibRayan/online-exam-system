@extends('admin.master')
@section('title')
    lesson
@endsection

@section('content')
    <div class="row mt-2">
        <div class="col-sm-3">
            <a href="{{ url('admin/lesson/add') }}" class="btn btn-sm btn-primary">Add</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-2">
            <h5 class="text-center p-2">All Lesson</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" width="">No</th>
                        <th scope="col" width="20%">Title</th>
                        <th scope="col" width="10%">Category</th>
                        <th scope="col">Time</th>
                        <th scope="col" width="35%">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>

                    <?php $i=1;?>

                    @foreach($lessons as $lesson)

                        <tbody>
                        <tr>
                            <th scope="row"><?php echo $i++;?></th>
                            <td >{{ $lesson->lesson_title }}</td>
                            <td>{{ $lesson->category_name }}</td>
                            <td >{{ $lesson->lesson_minute }} : 00 Min</td>
                            <td class="text-justify">{{ $lesson->lesson_description }}</td>
                            <td>
                                <a href="{{ route('lesson.edit' , ['id' => $lesson->lesson_id]) }}" class="btn btn-sm btn-success" title="edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('admin/lesson/delete/'. $lesson->lesson_id) }}" class="btn btn-sm btn-danger" title="delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a href="{{ url('admin/lesson/view/'.$lesson->lesson_id) }}" class="btn btn-sm btn-primary" title="view details">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                        @endforeach
                </table>
            </div>
        </div>
    </div>

    @endsection
