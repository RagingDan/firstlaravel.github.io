@extends('layout.master')
@section('content')

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{url('carousel/bg-masthead.jpg')}}"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Our Lady of the Pillar Church</h3>
        <p>Sta.Cruz Parish</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{url('carousel/santa-cruz-church.jpg')}}"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Archdiocesan Shrine of the Blessed Sacrament</h3>
        <p>Sta.Cruz Parish</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{url('carousel/corpus-christi.jpg')}}"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Corpus Christi</h3>
        <p>Sta.Cruz Parish</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<!-- About Section -->
<section class="page-section" id="about">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="text-white mt-0 font-weight-bolder">Our Lady of the Pillar Church,Sta.Cruz Parish</h2>
        <hr class="divider light my-4">
        <p class="text-white-75 font-weight-bold mb-4">Our Parish is located at Sta.Cruz,Manila.In front of Sta.Cruz Plaza near Escolta St. It is lead by Congregation of the Blessed Sacrament Fathers.</p>
        {{-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> --}}
      </div>
    </div>
  </div>
</section>
<!-- Services Section -->
<section class="page-section" id="services">
  <div class="container">
    <h2 class="text-center mt-0">Services</h2>
    <hr id = "divider" class="divider my-4">
    @if(Session::has('success'))
       <div class="alert alert-success">
         {{ Session::get('success') }}
       </div>
    @endif
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-place-of-worship mb-4" id = "fa-fa"></i>
          <h3 class="h4 mb-4 id font-weight-bold" ><a href="{{url('pages/schedule')}}" id = "fa-text">Mass Schedule</a></h3>
          <p class="text-muted mb-0">Our Mass Schedule is from Monday - Sunday</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-list-alt  mb-4" id = "fa-fa"></i>
          {{-- <h3 class="h4 mb-4 font-weight-bold"><a href="{{url('prayer-request')}}" id = "fa-text">Prayer Request</a></h3> --}}
          <h3><button type="button" class="btn btn-info btn-lg" style ="background-color:maroon;" data-toggle="modal" data-target="#myModal">Prayer Request</button></h3>
          <p class="text-muted mb-0">Offer your Prayers in every Mass</p>
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                <h4 class="modal-title">Prayer Request</h4>
              </div>
              <div class="modal-body">
                    <p class="text-muted mb-5"><b>Send us your Prayer Request!</b></p>
                    <div class="container">
                      @if(Session::has('success'))
                         <div class="alert alert-success">
                           {{ Session::get('success') }}
                         </div>
                      @endif
                      <div class = "row">
                        <div class="col-md-10 ml-4">
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
              </div>
              {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
              </div> --}}
            </div>
  </div>
        </div>
      </div>
    </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-globe mb-4" id ="fa-fa"></i>
          <h3 class="h4 mb-3 font-weight-bold"><a href="{{url('events')}}" id = "fa-text">Events</a></h3>
          <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-map-marked-alt mb-4" id = "fa-fa"></i>
          <h3 class="h4 mb-3 font-weight-bold"><a href="#map2-2c" id = "fa-text">Map</a></h3>
          <p class="text-muted mb-0">A Guide for direction from your current location to our Parish</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--- Map Section -->
<section class="map2 cid-qYkT0RX3A2" id="map2-2c">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 relative">
                <div class="google-map"><iframe  width ="100%" height="500px"frameborder="0" style="border:0" src="https://maps.google.com/maps?q=archdiocesan%20shrine%20of%20the%20blessed%20sacrament&t=&z=17&ie=UTF8&iwloc=&output=embed" allowfullscreen=""></iframe></div>
                <div class="block">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="mt-0">Contact Us</h2>
        <hr class=" my-2" id = "divider">
        <p class="text-muted mb-5">Do you have any concern? Please Message us!</p>
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
        {!! Form::open(['route'=>'contactus.store']) !!}
        {{csrf_field()}}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Name') !!}
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Email:') !!}
            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
            {!! Form::label('Message:') !!}
            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
            <span class="text-danger">{{ $errors->first('message') }}</span>
        </div>
          <div class="form-group">
          <button class="btn btn-success">Contact US!</button>
          </div>
          {!! Form::close() !!}
      </form>
    </div>
  </div>
    </div>
      </div>
    </div>
  </section>

@endsection
