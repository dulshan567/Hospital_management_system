<?php


namespace App\Http\Controllers;
use App\Models\Appoinment;
use App\Models\Medicine;

use App\Models\User;
// use Illuminate\Foundation\Auth\User;

use Illuminate\Http\Request;

/**
 * Summary of DoctorController
 */
class DoctorController extends Controller
{
   
   
   
  
    public function showadd(Request $request)
    {
        $appointment = Appoinment::count();
        $search =$request['search']??"";
        if($search !="null"){
            $data=appoinment::where('name','LIKE', "$search%")->orwhere('id','LIKE', "$search")->get();


        }else{
            $data=appoinment::all();

        }
        
        if($search !="null"){
            return view('doctor.home',compact('data','search','appointment'));
    }
}
  
    public function Checked($id)
    {
        $data=appoinment::find($id);
        $data->checked='Checked';
        $data->save();
        return redirect()->back();

    }

      
    
   
    public function addmedicine($id)
    {
        $data=appoinment::find($id);
        return view('doctor.medicine',compact('data'));
       

    }
    
    public function canceled($id)
    {
        $data=appoinment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();

    }
    
    public function addmedicieneuser(){
        return view('doctor.medicine');
    }
    
    
   public function add(Request $request){
        $data =new Medicine;
        $data->name=$request->name;
        $data->name1=$request->name1;
        $data->name2=$request->name2;
        $data->name3=$request->name3;
        $data->name4=$request->name4;
        $data->name5=$request->name5;
        $data->name6=$request->name6;
        $data->Doctor=$request->Doctor;
        $data->user_id=$request->user_id;
        $data->Patient_Name=$request->Patient_Name;
        $data->save();

        return redirect()->back();
    
   }
   
   public function profile($id)
   {
       $user = User::find($id);
   
       if (!$user) {
           // User not found, handle the error or redirect as needed
           return redirect()->back()->with('error', 'User not found.');
       }
   
       return view('doctor.profile', compact('user'));
   }
   
    
    
}
