@extends('back-end.master')
@section('content')

<section id="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          @foreach($obj_news as $news)
          <article class="news">
            <div class="feature-image">
              <img src="{{asset($news->image)}}" alt="image">
            </div>
            <div class="news-details">
              <h4 class="news-title"><a href="#">{{ $news->news_title }}</a></h4>
              <div class="news-meta">
                <p>{{ Carbon\Carbon::parse($news->created_at)->diffForHumans() }}</p>
              </div>
              <div class="description">
                <p>{{ $news->short_description }}</p>
              </div>
              <div class="read-more-button">
                <a href="{{ route('news-details',['id'=>$news->id]) }}" class="read-btn">Read More</a>
              </div>
            </div>
          </article>
 @endforeach
          <div class="news-pagination">
            <ul>
              <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection