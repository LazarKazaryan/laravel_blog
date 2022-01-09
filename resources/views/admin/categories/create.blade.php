@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create category</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Info boxes -->
            <div class="col-6">
                <form action="{{ route('admin.categories.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-1">
                        <label for="title">Title</label>
                        <input type="text" name='title' class="form-control" id="title" placeholder="Category title">
                    </div>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <button type='submit' class="btn btn-primary mt-2">Add</button>
                </form>
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection