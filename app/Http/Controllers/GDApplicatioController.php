<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GDApplication;
use Carbon\Carbon;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class GDApplicatioController extends Controller
{
    public function GD_application_page(){

        return view('back-end.GD_application_page');
    }
    public function save_GD_application_page(Request $request){
        $this->validate($request, [
            'subject' => 'required|max:30|min:2',
            'address' => 'required|max:30|min:2',
            'description' => 'required|min:5'
        
        ]);
         $user_id=Auth::user()->id;
        if(isset($request->btn_submit)){
            $obj_GDapplication=new GDApplication();
            $obj_GDapplication->subject=$request->subject;
            $obj_GDapplication->gd_date=$request->gd_date;
            $obj_GDapplication->name_of_police_station=$request->name_of_police_station;
            $obj_GDapplication->address_of_police_station=$request->address_of_police_station;
            $obj_GDapplication->designation=$request->designation;
            $obj_GDapplication->name_of_applicant=$request->name_of_applicant;
            $obj_GDapplication->profession=$request->profession;
            $obj_GDapplication->father_name=$request->father_name;
            $obj_GDapplication->village=$request->village;
            $obj_GDapplication->post_office=$request->post_office;
            $obj_GDapplication->thana=$request->thana;
            $obj_GDapplication->district=$request->district;
            $obj_GDapplication->description=$request->description;
            $obj_GDapplication->incident_time=$request->incident_time;
            $obj_GDapplication->address=$request->address;
            $obj_GDapplication->email_address=$request->email_address;
            $obj_GDapplication->phone_no=$request->phone_no;
            $obj_GDapplication->application_type='gd_application';
            $obj_GDapplication->application_submit_by=$user_id;
            $obj_GDapplication->save();
            return redirect()->back()->with('message','Application Send');
        }else {
            return view('back-end.GD_application_preview',['data'=>$request]);
        }

    }
    public function save_clearance_application_page(Request $request){
        $this->validate($request, [
            'subject' => 'required|max:30|min:2',
            'address' => 'required|max:30|min:2',
            'description' => 'required|min:5'
        
        ]);
        $user_id=Auth::user()->id;
        if(isset($request->btn_submit)){
            $obj_GDapplication=new GDApplication();
            $obj_GDapplication->subject=$request->subject;
            $obj_GDapplication->gd_date=$request->gd_date;
            $obj_GDapplication->name_of_police_station=$request->name_of_police_station;
            $obj_GDapplication->address_of_police_station=$request->address_of_police_station;
            $obj_GDapplication->designation=$request->designation;
            $obj_GDapplication->name_of_applicant=$request->name_of_applicant;
            $obj_GDapplication->profession=$request->profession;
            $obj_GDapplication->father_name=$request->father_name;
            $obj_GDapplication->village=$request->village;
            $obj_GDapplication->post_office=$request->post_office;
            $obj_GDapplication->thana=$request->thana;
            $obj_GDapplication->district=$request->district;
            $obj_GDapplication->description=$request->description;
            $obj_GDapplication->incident_time=$request->incident_time;
            $obj_GDapplication->address=$request->address;
            $obj_GDapplication->email_address=$request->email_address;
            $obj_GDapplication->phone_no=$request->phone_no;
            $obj_GDapplication->application_submit_by=$user_id;

            $obj_GDapplication->application_type='clearance';
            $obj_GDapplication->save();
            return redirect()->back()->with('message','Application Send');
        }else {
            return view('back-end.Clearance_preview',['data'=>$request]);
        }

    }
    public function Clearance_page(){
        return view('back-end.Clearance_page');
    }
    public function GD_application_list(){
        $obj_applications=GDApplication::where('application_type','gd_application')->paginate(10);
        return view('back-end.GD_application_list',['obj_applications'=>$obj_applications]);
    }
    public function GD_application_preview($id){
        $obj_applications=GDApplication::find($id);
        return view('back-end.GD_application_preview',['data'=>$obj_applications]);
    }
    public function Clearance_list(){
        $obj_applications=GDApplication::where('application_type','clearance')->paginate(10);
        return view('back-end.Clearance_list',['obj_applications'=>$obj_applications]);
    }
    public function Clearance_preview($id){
         $obj_applications=GDApplication::find($id);
        return view('back-end.Clearance_preview',['data'=>$obj_applications]);
    }
      public function useMyInfo(){
        echo view('back-end.ajax-use-my-info');
    }
}
