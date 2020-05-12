@extends('admin.layout.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Event
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ url('/admin/update',$events ->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Events Title</label>
                                  <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"   value="{{$events->title }}" placeholder="Blog Title">
                                  @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Events Content</label>
                                        <textarea class="form-control" name="body" id = "ckeditor" placeholder="Enter content  ...">{{$events->body}}</textarea>
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name = "image"  aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">upload Image</label>
                                      </div>
                                 </div>
                                 @error('image')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                   @enderror
                                <button type="submit" class="btn btn-success">Update</button>
                              </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
  <!-- /.content-wrapper -->
@endsection
