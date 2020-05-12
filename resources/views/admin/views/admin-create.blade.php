@extends('admin/layout/master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <a href ="{{url('/admin/create')}}" class = "btn btn-primary btn-md">Create Event</a>
        <small>Click the button to proceed on posting an Event</small>
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
                    <div class="card-header">Post an Events</div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      <form action="{{ url('/admin/create') }}" method="post" enctype="multipart/form-data">
                          @csrf
                              <div class="form-group">
                                <label for="exampleInputEmail1">Events Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  placeholder="Blog Title">
                                @error('title')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                  <div class="input-group">
                              <div class="form-group">
                                      <label for="exampleInputEmail1">Events Content</label>
                                      <textarea class="form-control" name="body" id = "ckeditor" placeholder="Enter content  ..."></textarea>
                              </div>
                              @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
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
                              <button type="submit" class="btn btn-primary" style="background-color:maroon;">Submit</button>
                            </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
