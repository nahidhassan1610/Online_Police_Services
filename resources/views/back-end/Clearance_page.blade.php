@extends('back-end.master')
@section('content')
<section id="clearance-page">
  <div class= "container">
   <div class="alert alert-secondary" role="alert">
      <h3 class= "text-center"> Write Your Clearance</h3>
         
         <input type="checkbox" onchange="useMyInfo()"><span> Use my Information</span>
        </br>
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
       <form class="gd-form" method="POST"  action="{{ route('save-clearance-application-info') }}">
              @csrf
               
              <label> Subject </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "subject" placeholder="Subject">
               <label> Date: </label>
               <input style= "margin-bottom:5px" class="form-control" type="date" name = "gd_date">
               <label> Enter Police Station Name </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "name_of_police_station" placeholder="">
               <label> Enter Police Station Address </label>
               <input style= "margin-bottom:5px" style= "margin-top:3px" class="form-control" type="text" name = "address_of_police_station" >
               
               <div id="infoo">
               <label> Designation </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "designation" placeholder="Mr./Mrs./Ms./MD.">
               <label> Enter your name: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "name_of_applicant" >
   
               <label> Enter your father's name: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "father_name" >

               <label> Enter village: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "village" >
               <label> Enter P.O: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "post_office" >
               <label> Enter thana: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "thana" >
               <label> Enter district: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "district" >
               <label> Enter email: </label>
               <input style= "margin-bottom:5px" class="form-control" type="email" name = "email_address" >
               <label> Enter cell number: </label>
               <input style= "margin-bottom:8px" class="form-control" type="text" name = "phone_no" >
               </div>

                <label> Enter your profession: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "profession" >

               <label> Enter the incident: </label>
               <textarea name="description" id="" cols="30" rows="10" placeholder="Describe Why you need the clearance"></textarea>
               <label> Enter incident time: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "incident_time" >
               
               <label> Enter address: </label>
               <input style= "margin-bottom:5px" class="form-control" type="text" name = "address" >

               <input type="submit" name="btn_preview" class="btn btn-success btn-warning" value="Preview Application">
               <input type="submit" name="btn_submit" class="btn btn-info btn-inline" value="Submit Application">
               {{-- <button class="btn btn-success btn-warning"> Preview Application </button> --}}
               {{-- <button class="btn btn-info btn-inline"> Submit Application</button> --}}

            </form>

         
        </div>

      </div>
   </div> <!---alert -->



  </div>
</section>

<script>
    function useMyInfo() {

      
        var xmlHttp = new XMLHttpRequest();
        var serverPage = 'http://127.0.0.1:8000/use-my-info/';

        xmlHttp.open('GET', serverPage);
        xmlHttp.onreadystatechange = function () {
            // console.log(xmlHttp.status == 200);
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                // alert("Hello! I am an alert box!!");
                // console.log(xmlHttp.status == 200);
                document.getElementById('infoo').innerHTML = xmlHttp.responseText;
            }
        }
        xmlHttp.send(null);
    }
</script>
@endsection