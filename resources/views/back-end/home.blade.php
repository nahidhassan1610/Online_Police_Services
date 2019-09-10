@extends('back-end.master')
@section('content')
  <div id="hero">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('back-end')}}/image/1.jpg" class="c-block" alt="...">
          <div class="carousel-caption">
            <p class="font-weight-bold">This police auditorium is the biggest in the world.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('back-end')}}/image/4.jpg" class="c-block" alt="...">
          <div class="carousel-caption">
            <p class="font-weight-bold">In front of the police department.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('back-end')}}/image/3.jpeg" class="c-block" alt="...">
          <div class="carousel-caption">
            <p class="font-weight-bold">Best police guest house.</p>
          </div>
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
  </div>
  <div id="about-police">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="police-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem pariatur cum quos nihil deleniti, eveniet voluptates magni dolor dicta, maiores!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection