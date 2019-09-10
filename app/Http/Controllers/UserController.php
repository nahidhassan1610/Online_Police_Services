<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function userProfile(){
        return view('back-end.user-profile');
    }
    public function changePassword()
    {
        return view('back-end.change-password');
    }
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => ['required',
                'min:6',
                'confirmed'],
            'password_confirmation' => 'required_with:password|same:password',
        ]);
        $current_password = Auth::User()->password;
        if (Hash::check($request->old_password, $current_password)) {
            $user_id = Auth::User()->id;
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request->password);;
            $obj_user->save();
            return redirect('user/profile')->with('message', 'Your password successfully change.');
        } else {
            return redirect()->back()->with('message', 'Please enter correct current password.');
        }
    }

    public function editUserProfile(){
        return view('back-end.edit-profile');
    }
    public function updateProfile(Request $request){
        $this->validate($request, [
            'name' => 'required|max:30|min:2', 
            'father_name' => 'required',
            
        ]);
        $user_id=Auth::user()->id;

            $user = User::find($user_id);

            $user->name = $request->name;
            // $user->email = $request->email;
            $user->father_name = $request->father_name;
            $user->designation = $request->designation;
            $user->village = $request->village;
            $user->post_office = $request->post_office;
            $user->thana = $request->thana;
            $user->district = $request->district;
            $user->phone_no = $request->phone_no;
            if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg,png|max:2048',
            ]);
            if (File::exists($user->image)) {
                unlink($user->image);
            }
            $profileImage = $request->file('image');
            $fileType = $profileImage->getClientOriginalExtension();
            $imageName = date('YmdHis') . "profile" . rand(5, 10) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($profileImage)->save($imageUrl);
            $user->image = $imageUrl;
        }
            $user->save();
     
            
            return redirect('user/profile')->with('message', 'Your profile successfully updated.');
    }







    public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'password' => ['required',
                'min:6',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/',
                'confirmed'],
            'password_confirmation' => 'required_with:password|same:password',

        ]);
        $password = $request->password;

        $user = User::where('email', $request->email)->first();
        if (!$user) return redirect()->to('login'); //or wherever you want

        $user->password = Hash::make($password);
        $user->update(); //or $user->save();

        //do we log the user directly or let them login and try their password for the first time ? if yes
        Auth::login($user);

        // If the user shouldn't reuse the token later, delete the token
        DB::table('password_resets')->where('email', $user->email)->delete();

        if ($user->hasRole('Admin')) {
            return redirect('/admin/dashboard');
        } else if ($user->hasRole('Super Admin')) {

            return redirect('/admin/dashboard');
        } else if ($user->hasRole('Manager')) {
            return redirect('/admin/dashboard');
      
        } else {
            $request->session()->invalidate();
            return redirect('/');
        }
    }

}
