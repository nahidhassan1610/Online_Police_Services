@extends('back-end.master')
@section('content')
  <section id="gd-list">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list">
            <h2>View Vehicle List</h2>
          </div>
          <table class="table table-striped all-gd">
            <thead>
              <tr>
                <th scope="col">vehicle_no</th>
                <th scope="col">owner_name</th>
                <th scope="col">owner_address</th>
                <th scope="col">owner_contact</th>
                <th scope="col">nid</th>
                <th scope="col">driving_licence</th>
                {{-- <th scope="col">Action</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach($obj_vehicle as $vehicle)
              <tr>
                <td>{{ $vehicle->vehicle_no }}</td>
                <td>{{ $vehicle->owner_name }}</td>
                <td>{{ $vehicle->owner_address }}</td>
                <td>{{ $vehicle->owner_contact }}</td>
                <td>{{ $vehicle->nid }}</td>
                <td>{{ $vehicle->driving_licence }}</td>
                {{-- <td><a href="{{ route('GD_application_preview',['id'=>$vehicle->id]) }}">View Details</a></td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="pagination-pt">
            {{ $obj_vehicle->links() }}
            
          </div>
        </div> 
      </div>
    </div>
  </section>
@endsection