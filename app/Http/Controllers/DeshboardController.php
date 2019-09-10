<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;




class DeshboardController extends Controller
{
    public function index(){
        return view('back-end.home');
    }
    public function userLogin(){
        return view('back-end.login');
    }
    public function userReg(){
        return view('back-end.registration');
    }
    public function saveUserInfo(Request $request){
        $this->validate($request, [
            'name' => 'required|max:30|min:2',
            'email' => 'email|unique:users,email|required',
            'father_name' => 'required',
            'password' => ['required',
                'min:6',
                'confirmed'],
            'password_confirmation' => 'required_with:password|same:password',
        ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->father_name = $request->father_name;
            $user->designation = $request->designation;
            $user->village = $request->village;
            $user->post_office = $request->post_office;
            $user->thana = $request->thana;
            $user->district = $request->district;
            $user->phone_no = $request->phone_no;
            $user->password = Hash::make($request->password);
            $user->save();
            $user->attachRole(Role::where('name', 'User')->first());
            Auth::login($user);
            

            return redirect('email/verify');


            // return redirect()->route('user-login');
    }
}
