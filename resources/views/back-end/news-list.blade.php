@extends('back-end.master')
@section('content')
  <section id="gd-list">
    <div class="container">
         @if(Session::get('message'))
                <div class="alert alert-success" id="message">
                    <h4 class=" text-center text-success"> {{ Session::get('message') }}</h4>
                </div>
            @endif
      <div class="row">
        <div class="col-md-12">
          <div class="list">
            <h2>View All GD</h2>
          </div>
          <table class="table table-striped all-gd">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Short Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($obj_news as $news)
              <tr>
                <th scope="row">{{ $news->id }}</th>
                <td>{{ $news->news_title }}</td>
                <td><img src="{{ asset($news->image) }}" style="height:50px;width:50px" alt="image"></td>
                <td>{{ $news->short_description }}</td>
                <td>
                    <a href="{{ route('news-details',['id'=>$news->id]) }}">View Details</a> |
                    <a href="{{ route('news-delete',['id'=>$news->id]) }}">Delete</a> |
                    <a href="{{ route('news-edit',['id'=>$news->id]) }}">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="pagination-pt">
            {{ $obj_news->links() }}
            
          </div>
        </div> 
      </div>
    </div>
  </section>
@endsection