@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create post</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Info boxes -->
            <div class="col-12">
                <form action="{{ route('admin.posts.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3 w-50">
                        <label for="title">Title</label>
                        <input type="text" name='title' class="form-control" id="title" placeholder="Post title" value="{{ old('title') }}">
                    </div>
                    @error('title')
                        <div class="text-danger w-50">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">
                        <textarea id="summernote" name="content">
                            {{ old('content') }}
                        </textarea>
                    </div>
                    @error('content')
                        <div class="text-danger w-50">{{ $message }}</div>
                    @enderror

                    <button type='submit' class="btn btn-primary">Add</button>
                </form>
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection