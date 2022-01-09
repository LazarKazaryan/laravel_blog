@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categories</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Info boxes -->
            <div class="col-2 mb-3">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-block btn-primary">Add Category</a>
            </div>

            <table class="table table-hover text-nowrap w-50">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>
                            <span class="btn-group rounded-3">
                                <a href="{{ route('admin.categories.show',$category->id) }}" class="btn btn-sm btn-info"><i class="far fa-eye"></i></a>
                                <a href="{{ route('admin.categories.edit',$category->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                <form action="{{ route('admin.categories.delete',$category->id) }}" class="btn btn-sm btn-danger p-1" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type='submit' class="border-0 bg-transparent"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </span>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection