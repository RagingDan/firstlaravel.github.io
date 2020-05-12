@extends('admin/layout/master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <a href ="{{url('/admin/create')}}" class = "btn btn-primary btn-md"><i class="fa fa-plus" aria-hidden="true"></i>&nbspCreate Event</a>
        <small>Click the button to proceed on posting an Event</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
        @endif
      <table class="table table-bordered">
        @foreach($events as $event)
    <thead>
      <tr>
        <th>Event Title</th>
        <th>Event Content</th>
        <th>Event Image</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$event->title}}</td>
        <td class="col-2 mr-2 text-truncate" style="max-width: 200px;">{{$event->body}}</td>
        <td><img src = "{{url('/eventsImg',$event->image)}}" style ="width:200px;height:200px;" ></td>
        <td><a href ="#" class = "btn btn-info btn-lg pull-right"><i class="fa fa-eye"></i></a></td>
        <td><a href ="{{ url('admin/editEvents',$event->id) }}" class = "btn btn-warning btn-lg pull-right"><i class="fa fa-edit"></i></a></td>
        <td><a href ="{{route('event.delete',['id'=>$event->id])}}" class = "btn btn-danger btn-lg"><i class="fa fa-trash"></i></a></td>
        {{-- <td><button class = "btn btn-success btn-lg pull-right">View</button></td>
        <td><button class = "btn btn-info btn-lg pull-right">Edit</button></td>
        <td><button class = "btn btn-danger btn-lg ">Delete</button></td> --}}
      </tr>
    </tbody>
  @endforeach
  </table>
  <div class="mt-3">
  {{$events->links()}}
  </div>
</div>

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
