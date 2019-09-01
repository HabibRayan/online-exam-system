@extends('admin.master')

@section('title')
    question
@endsection

@section('content')
    <div class="row mt-2">
        <div class="col-sm-3">
            <a href="{{ url('admin/lesson/question/add') }}" class="btn btn-sm btn-primary">Add</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-2">
            <h5 class="text-center p-2">All Question</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" width="">No</th>
                        <th scope="col" width="20%">Question</th>
                        <th scope="col" width="20%">Score</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>

                    <?php $i=1;?>

                    @foreach($questions as $question)

                        <tbody>
                        <tr>
                            <th scope="row"><?php echo $i++;?></th>
                            <td >{{ $question->question }}</td>
                            <td>{{ $question->score }}</td>
                            <td>
{{--                                <a href="{{ url('admin/question/edit/'.$question->id) }}" class="btn btn-sm btn-success" title="edit">--}}
{{--                                    <i class="fa fa-edit"></i>--}}
{{--                                </a>--}}
{{--                                <a href="{{ url('admin/lesson/delete/') }}" class="btn btn-sm btn-danger" title="delete">--}}
{{--                                    <i class="fa fa-trash"></i>--}}
{{--                                </a>--}}
                                <a href="{{ url('admin/question/view/'.$question->id) }}" class="btn btn-sm btn-primary" title="view details">
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
