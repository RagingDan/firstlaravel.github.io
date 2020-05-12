@extends('layout.master')
@section('content')
  <!-- Contact Section -->
  <section class="page-section" id="">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Prayer Request</h2>
          <hr class=" my-2" id = "divider">
          <p class="text-muted mb-5">Send us your Prayer Request!</p>
        </div>
      </div>
      <div class="container">
        @if(Session::has('success'))
           <div class="alert alert-success">
             {{ Session::get('success') }}
           </div>
        @endif
        <div class = "row">
          <div class="col-md-7">
          {!! Form::open(['route'=>'prayer.store']) !!}
          {{csrf_field()}}
          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
              {!! Form::label('Name') !!}
              {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter your name']) !!}
              <span class="text-danger">{{ $errors->first('name') }}</span>
          </div>
          <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
              {!! Form::label('Email:') !!}
              {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
              <span class="text-danger">{{ $errors->first('email') }}</span>
          </div>
          <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
              {!! Form::label('Message:') !!}
              {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Please type your prayers!']) !!}
              <span class="text-danger">{{ $errors->first('message') }}</span>
          </div>
            <div class="form-group">
            <button class="btn btn-success">Submit</button>
            </div>
            {!! Form::close() !!}
        </form>
      </div>
    </div>
      </div>
@endsection
