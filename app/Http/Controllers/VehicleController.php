<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class VehicleController extends Controller
{
    public function addVehicle(){
        return view('back-end.add-vehicle');
    }
    public function searchVehicle(){
        return view('back-end.search-vehicle');
    }
    public function saveVehicle(Request $request ){
          $this->validate($request, [
            'vehicle_no' => 'required|max:30|min:2',
            'vehicle_type' => 'required|max:30|min:2',
            'owner_name' => 'required|min:5'
        
        ]);
        $user_id=Auth::user()->id;
        // return $request;
        $obj_vehicle=new Vehicle();
        $obj_vehicle->vehicle_no=$request->vehicle_no;
        $obj_vehicle->vehicle_type=$request->vehicle_type;
        $obj_vehicle->owner_name=$request->owner_name;
        $obj_vehicle->owner_address=$request->owner_address;
        $obj_vehicle->owner_contact=$request->owner_contact;
        $obj_vehicle->reg_date=$request->reg_date;
        $obj_vehicle->seller_address=$request->seller_address;
        $obj_vehicle->insurance=$request->insurance;
        $obj_vehicle->insurance_exp_date=$request->insurance_exp_date;
        $obj_vehicle->driving_licence=$request->driving_licence;
        $obj_vehicle->nid=$request->nid;
        $obj_vehicle->vehicles_added_by=$user_id;
        $obj_vehicle->save();

        return redirect()->back()->with('message','Info Save succefully');
    }
    public function listVehicle(){
        $obj_vehicle=Vehicle::where('id','>',0)->paginate(10);
        return view('back-end.vehicle-list',['obj_vehicle'=>$obj_vehicle]);
    }
    public function searchVehicleInfo(Request $request){
        // return $request;
        if($request->vehicle_no==null && $request->driving_licence==null && $request->nid==null){
            return redirect()->back();
        }elseif ($request->vehicle_no!=null && $request->driving_licence==null && $request->nid==null) {
            $obj_vehicle=Vehicle::where('vehicle_no',$request->vehicle_no)->get();

        }elseif ($request->vehicle_no==null && $request->driving_licence!=null && $request->nid==null) {
            $obj_vehicle=Vehicle::where('driving_licence',$request->driving_licence)->get();

        }elseif ($request->vehicle_no==null && $request->driving_licence==null && $request->nid!=null) {
              $obj_vehicle=Vehicle::where('nid',$request->nid)->get();

        }elseif ($request->vehicle_no!=null && $request->driving_licence!=null && $request->nid==null) {
            $obj_vehicle=Vehicle::where('vehicle_no',$request->vehicle_no)
            ->where('driving_licence',$request->driving_licence)
            ->get();
        }elseif ($request->vehicle_no!=null && $request->driving_licence==null && $request->nid!=null) {
            $obj_vehicle=Vehicle::where('vehicle_no',$request->vehicle_no)
            ->where('nid',$request->nid)
            ->get();
        }elseif ($request->vehicle_no==null && $request->driving_licence!=null && $request->nid!=null) {
            $obj_vehicle=Vehicle::where('driving_licence',$request->driving_licence)
            ->where('nid',$request->nid)
            ->get();
        }elseif ($request->vehicle_no!=null && $request->driving_licence!=null && $request->nid!=null) {
            $obj_vehicle=Vehicle::where('driving_licence',$request->driving_licence)
            ->where('nid',$request->nid)
            ->where('vehicle_no',$request->vehicle_no)
            ->get();
        }else {
             return redirect()->back();
        }   
        return view('back-end.search-result',['obj_vehicle'=>$obj_vehicle]);

    }
}
