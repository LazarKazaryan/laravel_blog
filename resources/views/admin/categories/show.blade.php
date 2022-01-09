@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 d-flex align-items-center">
                <h1 class="m-0 mr-2">{{ $category->title }} </h1>
                <a href="{{ route('admin.categories.edit',$category->id) }}" class="text-warning text-small"><i class="fas fa-pencil-alt"></i></a>
                <form action="{{ route('admin.categories.delete',$category->id) }}"method="post">
                    @csrf
                    @method('delete')
                    <button type='submit' class="border-0 bg-transparent text-small text-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Info boxes -->
            <table class="table table-hover text-nowrap w-50">
                <tbody>
                    <tr>
                        <td>Id</td>
                        <td>{{ $category->id }}</td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{ $category->title }}</td>
                    </tr>
                </tbody>
            </table>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection