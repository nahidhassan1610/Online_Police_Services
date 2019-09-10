@extends('back-end.master')
@section('content')

<section id="single-news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <article class="news">
            <div class="feature-image">
              <img src="{{ asset($obj_news->image) }}" alt="image">
            </div>
            <div class="news-details">
              <h4 class="news-title">{{ $obj_news->news_title }}</h4>
              <div class="news-meta">
                <p>{{ Carbon\Carbon::parse($obj_news->created_at)->diffForHumans() }}</p>
              </div>
              <div class="description">
                <p>{{ $obj_news->long_description }}</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  @endsection