@extends('back-end.master')
@section('content')

<section id="clearance">
  <div class= "container">
    <div class="print-button">
      <a href="javascript:window.print()" class="print-btn">Print Application</a>
    </div>
    <div class="alert alert-secondary" role="alert">
      <h3 class= "text-center"> Preview Your Clearance application</h3>

      <p > <span class="font-weight-bold"> Date: </span> {{ Carbon\Carbon::parse($data->created_at)->toFormattedDateString() }} </p>
      <p> <span > To, </span> <br>
       <span style="margin-top:10px"> Officer in Charge </span> <br>
       <span style="margin-top:10px"> <span > {{ $data->name_of_police_station }} </span> <br>
       <span > {{ $data->address_of_police_station }}  </span> </p>
      <p> <span class="font-weight-bold"> Subject:  </span> {{ $data->subject }} </p>
      <p> Dear Sir, </p>
     I, {{ $data->designation }} {{ $data->name_of_applicant }} son of {{ $data->father_name }}Village: {{ $data->village }}, P.O: {{ $data->post_office }}, Thana: {{ $data->thana }}, District: {{ $data->district }}, is a {{ $data->profession }} by profession. That today, on Mohakhali, at around {{ $data->incident_time }}. <br><br>

        In the circumstances, {{ $data->description }}. <br> <br>
      <p> Yours truly,
        {{ $data->designation }} {{ $data->name_of_applicant }}<br>
        <span class="font-weight-bold"> Corresponding Address:</span> {{ $data->address }}.<br>
        <span class="font-weight-bold"> Email: </span>  {{ $data->email_address }}<br>
        <span class="font-weight-bold"> Cell No. </span> {{ $data->phone_no }} </p>
    </div>
  </div>
</section>
@endsection