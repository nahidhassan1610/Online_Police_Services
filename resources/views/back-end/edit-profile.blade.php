@extends('back-end.master')
@section('content')

<section class="login-page">
    
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Update Your Profile </h3>
                  
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
            <form class="Registration-form" action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
               @csrf
               
               <label> Gender </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->designation }}" type="text" name = "designation" placeholder="Mr./Mrs./Ms./MD.">
               <label> Enter your name: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->name }}" type="text" name = "name" >
                {{-- <label> Enter email: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->email }}" type="email" name = "email" > --}}
               <label> Enter your fathers name: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->father_name }}" type="text" name = "father_name" >

               

               <label> Enter village: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->village }}" type="text" name = "village" >
               <label> Enter P.O: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->post_office }}" type="text" name = "post_office" >
               <label> Enter thana: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->thana }}" type="text" name = "thana" >
               <label> Enter district: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->district }}" type="text" name = "district" >
                                
               <label> Enter district: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->district }}" type="text" name = "district" >
                
               <label> Enter cell number: </label>
               <input style= "margin-bottom:8px" class="form-control" value="{{ Auth::user()->phone_no }}" type="text" name = "phone_no" >
                    

               <label> Image: </label>
               <input style= "margin-bottom:8px" class="form-control" type="file" name = "image" >
           

               <input type="submit" name="btn" class="btn btn-info btn-inline" value="Update">
          
            </form>
          </div>

        </div>


   </div> <!---alert -->
  </div>
</section>
@endsection