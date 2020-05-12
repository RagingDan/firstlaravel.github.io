@extends('layout.master')
@section('content')
  <section>
  <div class="container">
  <div class="well">
      <div class="media">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
      	<a class="pull-left" href="#">
    		<img class="media-object" src={{ url('/eventsImg').'/'. $events->image}} style="width:200px;height:200px;padding-right:10px;">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading" style="font-weight:bolder;">{{ $events->title }}</h4>
          {{-- <p class="text-right">By Francisco</p> --}}
          <p>{{$events->body}}</p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar" style="color:red;font-weight:800">{{ $events->created_at->diffForHumans() }}</i></span></li>
			</ul>
    </div>
       {{-- <a href="{{ url('events/editEvents',$events->id) }}" class = "btn btn-info" style ="margin-right:10px">Edit</a>
       <a href="{{route('event.delete',['id'=>$events->id])}}" class = "btn btn-danger" style ="margin-right:10px">Delete</a>
       {{-- <a href="{{ url('/blog/edit',$post->id) }}" class="btn btn-primary ml-3 mb-3">Edit</a>
                            <a href="{{ route('post.delete', ['id' => $post->id]) }}">
                              <button type="button" class="btn btn-danger mb-3">Delete Post</button>
                            </a> --}}
    </div>
  </div>
</section>
@endsection
