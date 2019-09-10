@extends('back-end.master')
@section('content')
<section id="clearance-page">
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Edit News</h3>
        @if(Session::get('message'))
                <div class="alert alert-success" id="message">
                    <h4 class=" text-center text-success"> {{ Session::get('message') }}</h4>
                </div>
            @endif
            <div class=" card card-default">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        <div class= "row">
          <div class= "col">
            <form method="POST" action="{{ route('update-news-info') }}" class="gd-form" enctype="multipart/form-data">
                @csrf
    
               <label> News Title: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ $obj_news->news_title }}" type="text" name = "news_title" >
               <label> Short Description: </label>
               <input style= "margin-bottom:5px" class="form-control"value="{{ $obj_news->short_description }}" type="text" name = "short_description" >
               <input style= "margin-bottom:5px" class="form-control"value="{{ $obj_news->id }}" type="hidden" name = "news_id" >
         
               <label>Long Description: </label>
               <textarea name="long_description" id="" cols="30" rows="10" placeholder="Long description">
           {{ $obj_news->long_description }}
               </textarea>
               <label> Image: </label>
               <input style= "margin-bottom:5px" class="form-control" accept="" type="file" name = "image" >
               
            <input type="submit" name="btn"style= "margin-left:45%" class="btn btn-info btn-inline">

    

            </form>
          </div>

        </div>


   </div> <!---alert -->
  </div>
</section>

@endsection