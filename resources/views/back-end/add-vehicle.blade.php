@extends('back-end.master')
@section('content')
<section id="add-vehicle">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
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

          <form method="POST" action="{{ route('save-vehicle-info') }}" class="add-vehicle-form">
              @csrf
            <h3 class="form-title">Add Vehicle</h3>

              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Vehicle number</label>
                      <input type="text" class="form-control" name="vehicle_no" id="inputEmail4" >
                  </div>
                  <div class="form-group col-md-6">
                      <label for="vehicle_type">Vehicle type</label>
                      <input type="text" class="form-control" name="vehicle_type" id="vehicle_type" >
                  </div>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="owner_name">Owner name</label>
                      <input type="text" name="owner_name" class="form-control" id="owner_name">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="owner_address">Owner address</label>
                      <input type="text" name="owner_address" class="form-control" id="owner_address">
                  </div>
              </div>

              <div class="form-row">

                  <div class="form-group col-md-6">
                      <label for="owner_contact">owner contact</label>
                      <input type="text" name="owner_contact" class="form-control" id="owner_contact">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="reg_date">registration date</label>
                      <input type="date" name="reg_date" class="form-control" id="reg_date">
                  </div>

              </div>
              <div class="form-row">

                  <div class="form-group col-md-6">
                      <label for="seller_address">seller address</label>
                      <input type="text" name="seller_address" class="form-control" id="seller_address">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="insurance">insurance</label>
                      <input type="text" name="insurance" class="form-control" id="insurance">
                  </div>
  
              </div>
              <div class="form-row">

                  <div class="form-group col-md-6">
                      <label for="inputCity">insurance expire date</label>
                      <input type="date" name="insurance_exp_date" class="form-control" id="inputCity">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="dv_l">Driving Licence</label>
                      <input type="text" name="driving_licence" class="form-control" id="dv_l">
                  </div>


              </div>
              <div class="form-row">

                  <div class="form-group col-md-6">
                      <label for="nid">NID</label>
                      <input type="number" name="nid" class="form-control" id="nid">
                  </div>

              </div>

            <input type="submit" name="btn" value="Submit" class="btn btn-primary">
              {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection