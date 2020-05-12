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
    <section class="content">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
        @endif
      <table class="table table-dark">
        @foreach($requests as $request)
    <thead>
      <tr>
        <th>Name</th>
        <th>Prayer Request</th>
        <th>Email</th>
      </th>
    </thead>
    <tbody>
      <tr>
        <td>{{$request->name}}</td>
        <td>{{$request->message}}</td>
        <td><a href = "mailto:">{{$request->email}}</a></td>
        <td><a href = "mailto:{{$request->email}}"class = "btn btn-info pull-right"><i class = "fa fa-reply"></i></a></td>
        <td><a href = "{{route('request.delete',['id'=>$request->id])}}" class = "btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></i></td>
        <td></td>
        {{-- <td><button class = "btn btn-success btn-lg pull-right">View</button></td>
        <td><button class = "btn btn-info btn-lg pull-right">Edit</button></td>
        <td><button class = "btn btn-danger btn-lg ">Delete</button></td> --}}
      </tr>
    </tbody>
  @endforeach
  </table>
  <div class="mt-3">
  {{$requests->links()}}
  </div>
</div>

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
