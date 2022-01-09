@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit tag {{ $tag->title }}</h1>
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
                <form action="{{ route('admin.tags.update', $tag->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group mb-1">
                        <label for="title">Title</label>
                        <input type="text" name='title' class="form-control" id="title" placeholder="Tag title" value="{{ $tag->title }}">
                    </div>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <span>
                    <button type='submit' class="btn btn-primary mt-2">Edit</button>
                    <a href="{{ route('admin.tags.index') }}" class="btn btn-secondary mt-2">Cancel</a>
                </form>
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection