@extends('layout.master')
@section('content')
    {{-- <section> --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{url('carousel/1.jpg')}}" alt="First slide" style="width:100%;height:500px;" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('carousel/2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('carousel/3.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<div class="about-section paddingTB60 gray-bg">
                <div class="container">
                    <div class="row">
						<div class="col-md-7 col-sm-6">
							<div class="about-title clearfix">
								<h1>About <span>Appmom</span></h1>
								<h3>Lorem ipsum dolor sit amet </h3>
								<p class="about-paddingB">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor congue non sit amet dolor. Proin pretium purus a lorem ornare </p>
								<p>sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros mauris, convallis et sem tempus, viverra hendrerit sapien</p>
						<div class="about-icons">
              <ul >
                  <li><a href="https://www.facebook.com/stacruzparishmanila/" target="_new"><i id="social-fb" class="fab fa-facebook fa-3x social"></i></a> </li>
                  <li> <a href="mailto:stacruzparish2019@gmail.com"><i id="social-em" class="fa fa-envelope fa-3x social"></i></a> </li>
              </ul>
	          </div>
						</div>
						</div>
						<div class="col-md-5 col-sm-6">
							<div class="about-img">
								<img src="{{url('carousel/1.jpg')}}" alt="">
				</div>
			</div>
              </div>
          </div>
  </div>

  <div class="about-section paddingTB60 gray-bg">
                  <div class="container">
                      <div class="row">
  						<div class="col-md-7 col-sm-6">
  							<div class="about-title clearfix">
  								<h1>About <span>Appmom</span></h1>
  								<h3>Lorem ipsum dolor sit amet </h3>
  								<p class="about-paddingB">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor congue non sit amet dolor. Proin pretium purus a lorem ornare </p>
  								<p>sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros mauris, convallis et sem tempus, viverra hendrerit sapien</p>
  						<div class="about-icons">
                <ul >
                    <li><a href="https://www.facebook.com/stacruzparishmanila/" target="_new"><i id="social-fb" class="fab fa-facebook fa-3x social"></i></a> </li>
                    <li> <a href="mailto:stacruzparish2019@gmail.com"><i id="social-em" class="fa fa-envelope fa-3x social"></i></a> </li>
                </ul>
  	          </div>
  						</div>
  						</div>
  						<div class="col-md-5 col-sm-6">
  							<div class="about-img">
  								<img src="{{url('carousel/1.jpg')}}" alt="">
  				</div>
  			</div>
                </div>
            </div>
    </div>

    <div class="about-section paddingTB60 gray-bg">
                    <div class="container">
                        <div class="row">
    						<div class="col-md-7 col-sm-6">
    							<div class="about-title clearfix">
    								<h1>About <span>Appmom</span></h1>
    								<h3>Lorem ipsum dolor sit amet </h3>
    								<p class="about-paddingB">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor congue non sit amet dolor. Proin pretium purus a lorem ornare </p>
    								<p>sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros mauris, convallis et sem tempus, viverra hendrerit sapien</p>
    						<div class="about-icons">
                  <ul >
                      <li><a href="https://www.facebook.com/stacruzparishmanila/" target="_new"><i id="social-fb" class="fab fa-facebook fa-3x social"></i></a> </li>
                      <li> <a href="mailto:stacruzparish2019@gmail.com"><i id="social-em" class="fa fa-envelope fa-3x social"></i></a> </li>
                  </ul>
    	          </div>
    						</div>
    						</div>
    						<div class="col-md-5 col-sm-6">
    							<div class="about-img">
    								<img src="{{url('carousel/1.jpg')}}" alt="">
    				</div>
    			</div>
                  </div>
              </div>
      </div>

@endsection
