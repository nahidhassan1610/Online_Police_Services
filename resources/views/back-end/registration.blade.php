@extends('back-end.master')
@section('content')

<section class="login-page">
    
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Registration </h3>
                  
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
            <form class="Registration-form" action="{{ route('save-user-info') }}" method="POST">
               @csrf
               
               <label> Gender </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "designation" placeholder="Mr./Mrs./Ms./MD.">
               <label> Enter your name: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "name" >
                <label> Enter email: </label>
               <input style= "margin-bottom:5px" class="form-control" type="email" name = "email" >
               <label> Enter your fathers name: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "father_name" >

               

               <label> Enter village: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "village" >
               <label> Enter P.O: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "post_office" >
               <label> Enter thana: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "thana" >
               <label> Enter district: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "district" >
                                

               <label> Enter cell number: </label>
               <input style= "margin-bottom:8px" class="form-control" type="text" name = "phone_no" >
           

               <label> Password: </label>
               <input style= "margin-bottom:8px" class="form-control" type="password" name = "password" >
           

               <label> Confirm Password: </label>
               <input style= "margin-bottom:8px" class="form-control" type="password" name = "password_confirmation" >
           
               <input type="submit" name="btn" class="btn btn-info btn-inline" value="Sign In">
               {{--  <button class="btn btn-info btn-inline">Sign In</button>  --}}
               <p>If you have an account.Please <a href="{{ route('user-login') }}">Sign In</a> Here</p>

            </form>
          </div>

        </div>


   </div> <!---alert -->
  </div>
</section>
@endsection