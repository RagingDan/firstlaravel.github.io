@extends('layout.master')

@section('content')
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
                      <form action="{{ url('/events/update',$events ->id) }}" method="post" enctype="multipart/form-data">
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
                              <button type="submit" class="btn btn-primary" style="background-color:maroon;">Update</button>
                            </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  </section>
@endsection
