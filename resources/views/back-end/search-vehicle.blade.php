@extends('back-end.master')
@section('content')

<section id="search-vehicle">
  <div class= "container">
     <div class="alert alert-secondary" role="alert">
            <center>
                <h1>Search Your Vehicle</h1>
            </center>


            <div class= "row">

              <div class= "col-8 offset-2">

                <form method="POST" action="{{ route('search-vehicle-info') }}">
                  @csrf
                    <div class = "form-group">
                        <label  class= "font-weight-bold" for="vehicle_no">Enter vehicle number </label>
                        <input class = "form-control"type="text" name="vehicle_no" id="vehicle_no" >
                    </div>
                    <div class = "form-group">
                        <label  class= "font-weight-bold" for="driving_licence">Enter driving licence number</label>
                        <input class = "form-control" type="text" name="driving_licence" id="driving_licence" >

                    </div>
                    <div class = "form-group">
                        <label  class= "font-weight-bold" for="name">Enter NID</label>
                        <input class = "form-control"type="text" name="nid" id="name" >
                    </div>

                    <input class= "btn btn-success btn-block" type="submit" name="btn" value="Search" >
                </form>
                <br>

              </div>

            </div>
     </div>
</div> 
</section>

@endsection