@extends('admin.master')

@section('title')
    category
    @endsection

@section('content')

     <div class="row mt-2">
         <div class="col-sm-3">
             <a href="{{ url('admin/category/add') }}" class="btn btn-sm btn-primary">Add</a>
         </div>
     </div>

     <div class="row">
         <div class="col-md-12 mt-2">
             <h5 class="text-center p-2">All Category</h5>
         </div>
     </div>

     <div class="row">
         <div class="col-md-12">
             <div class="table">
                 <table class="table">
                     <thead>
                     <tr>
                         <th scope="col">SL No</th>
                         <th scope="col">Category Name</th>
                         <th scope="col">Description</th>
                         <th scope="col">Action</th>
                     </tr>
                     </thead>
                     <?php $i=1;?>
                        @foreach($categories as $category )
                     <tbody>
                     <tr>
                         <th scope="row"><?php echo $i++; ?></th>
                         <td>{{  $category-> category_name }}</td>
                         <td>{{  $category-> category_description }}</td>
                         <td>
                            <a href="{{ route('category.edit', ['id' => $category->category_id]) }}" class="btn btn-sm btn-success" title="edit">
                                <i class="fa fa-edit"></i>
                            </a>
                             <a href="{{ route('category.delete', ['id' => $category->category_id]) }}" class="btn btn-sm btn-danger" title="delete">
                                <i class="fa fa-trash"></i>
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
