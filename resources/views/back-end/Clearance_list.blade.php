@extends('back-end.master')
@section('content')
  <section id="gd-list">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list">
            <h2>View All Clearance</h2>
          </div>
          <table class="table table-striped all-gd">
            <thead>
              <tr>
                <th scope="col">Clearance ID</th>
                <th scope="col">Clearance Subject</th>
                <th scope="col">Victims Name</th>
                <th scope="col">Victims Phone Number</th>
                <th scope="col">Police Station Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            
              @foreach($obj_applications as $application)
              <tr>
                <th scope="row">{{ $application->id }}</th>
                <td>{{ $application->subject }}</td>
                <td>{{ $application->name_of_applicant }}</td>
                <td>{{ $application->phone_no }}</td>
                <td>{{ $application->name_of_police_station }}</td>
                <td><a href="{{ route('clearance_preview',['id'=>$application->id]) }}">View Details</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="pagination-pt">
            {{ $obj_applications->links() }}
            {{-- <ul>
              <li><a href="#">prev</a></li>
              <li><a href="#">01</a></li>
              <li><a href="#">02</a></li>
              <li><a href="#">03</a></li>
              <li><a href="#">04</a></li>
              <li><a href="#">next</a></li>
            </ul> --}}
          </div>
        </div> 
      </div>
    </div>
  </section>
  @endsection