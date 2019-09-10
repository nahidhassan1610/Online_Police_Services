@extends('back-end.master')
@section('content')
<section id="gd-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <section class="card">
                    <div class="card-header">
                        {{--                        <h3 class="center">{{$role->name}}</h3>--}}
                        <h3 class="center">Profile</h3>
                    </div>
                    <div class="card-body">

                        @if(Session::get('message'))
                            <div class="alert alert-success" id="message">
                                <h3 class=" text-center text-success"> {{ Session::get('message') }}</h3>
                            </div>
                        @endif
                        <div class="row">
                         <div class="col-md-8">
                            <table class="table" width="100%">
                                <tr class="">
                                    <th style="width: 50%" class="" scope="col">Name</th>
                                    <td style="width: 50%" data-title="Name">{{ Auth::user()->name }}</td>

                                </tr>
                                <tr class="">
                                    <th scope="col">Email</th>
                                    <td data-title="Email">{{ Auth::user()->email }}</td>
                                </tr>
                                <tr class="">
                                    <th scope="col">Father Name</th>
                                    <td data-title="Email">{{ Auth::user()->father_name }}</td>
                                </tr>
                                <tr class="">
                                    <th scope="col">Village</th>
                                    <td data-title="Email">{{ Auth::user()->village }}</td>
                                </tr>
                                <tr class="">
                                    <th scope="col">Post Office</th>
                                    <td data-title="Email">{{ Auth::user()->post_office }}</td>
                                </tr>
                          
                                <tr class="">
                                    <th scope="col">Thana</th>
                                    <td data-title="Email">{{ Auth::user()->thana }}</td>
                                </tr>
                          
                                <tr class="">
                                    <th scope="col">District</th>
                                    <td data-title="Email">{{ Auth::user()->district }}</td>
                                </tr>
                          
                          
                                <tr class="">
                                    <th scope="col">Phone No</th>
                                    <td data-title="Email">{{ Auth::user()->phone_no }}</td>
                                </tr>
                          
                                <tr class="">
                                    <th scope="col">
                                        <a class="btn btn-block btn-warning" href="{{route('password-change')}}">Change Password</a>
                                    </th>
                                    <td data-title="">

                                        <a class="btn btn-block btn-info" href="{{ route('edit-profile') }}">Edit Profile</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                         <div class="col-md-4 float-right">
                             @if(!empty(Auth::user()->image))
                            <img src="{{ asset(Auth::user()->image) }}" style="height: 300px;" class="img-thumbnail">
                            @else
                            <img src="{{ asset('images/d_profilePic.png') }}" style="height: 300px;" class="img-thumbnail">
                            @endif
                        </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</section>

@endsection