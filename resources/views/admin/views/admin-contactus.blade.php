@extends('admin/layout/master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <a href ="{{url()}}" class = "btn btn-primary btn-md"></a>
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
        @foreach($contacts as $contact)
    <thead>
      <tr>
        <th>Name</th>
        <th>Message</th>
        <th>Email</th>
      </th>
    </thead>
    <tbody>
      <tr>
        <td>{{$contact->name}}</td>
        <td>{{$contact->message}}</td>
        <td><a href = "mailto:">{{$contact->email}}</a></td>
        <td><a href = "mailto:{{$contact->email}}"class = "btn btn-info pull-right"><i class = "fa fa-reply"></i></a></td>
        <td><a href = "{{route('contact.delete',['id'=>$contact->id])}}" class = "btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></i></td>
        <td></td>
        {{-- <td><button class = "btn btn-success btn-lg pull-right">View</button></td>
        <td><button class = "btn btn-info btn-lg pull-right">Edit</button></td>
        <td><button class = "btn btn-danger btn-lg ">Delete</button></td> --}}
      </tr>
    </tbody>
  @endforeach
  </table>
  <!--div class="mt-3">
  {{$contacts->links()}}
</div-->
</div>

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
