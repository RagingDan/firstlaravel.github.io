@extends('layout.master')
@section('content')
{{-- <section>
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
                    <form action="{{ url('/events/submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Events Title</label>
                              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  placeholder="Blog Title">
                              @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Events Content</label>
                                    <textarea class="form-control" name="body" id = "ckeditor" placeholder="Enter content  ..."></textarea>
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
                            <button type="submit" class="btn btn-primary" style="background-color:maroon;">Submit</button>
                          </form>
                </div>
            </div>
        </div>
    </div>
</div>

</section> --}}
<section>

  <div class="container">
              {{-- @if (session('status'))
              <div class="alert alert-success" role="alert">
              {{ session('status') }}
              </div>
               @endif --}}
      <div class="row">
          @foreach ($events as $event)
          <div class="col-md-4 mb-2">
                  <div class="card" style="width: 18rem;">
                  <img width = "200px" height="200px" src="{{ url('/eventsImg').'/'.$event->image}}" class="card-img-top" alt="..." style>
                          <div class="card-body">
                          <h5 class="card-title">{{ $event->title }}</h5>
                          <p class="card-text">{{ str_limit($event->body) }}</p>
                          <a href="{{ url('/events/viewEvents',$event->id)}}" class="btn btn-info" style = "background-color:maroon;">View</a>
                          </div>
                          <div class="card-footer text-muted">
                                 {{ $event->created_at->diffForHumans() }}
                                </div>
                        </div>
          </div>
          @endforeach
      </div>
        <div class="mt-3">
        {{$events->links()}}
        </div>
      </div>
      </section>
@endsection
