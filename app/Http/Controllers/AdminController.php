<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\User;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appoinment;
use App\Models\News;
use Notification;
use app\Notifications\MyFirstNotification;

/**
 * Summary of AdminController
 */
class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');

    }

    public function upload(Request $request)
    {
        $doctor=new doctor;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->specialty=$request->specialty;

        $doctor->save();
        return redirect()->back()->with('message','Doctor aded successfully');


    }
    public function showappointment()
    {
        $data=appoinment::all();
        return view('admin.showappointment',compact('data'));
    }
    public function approved($id)
    {
        $data=appoinment::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();

    }
    public function canceled($id)
    {
        $data=appoinment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();

    }

    /**
     * Summary of showdoctors
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showdoctors()
    {
        $data=doctor::all();
        return view('admin.showdoctors',compact('data'));
        
        
        
    }
    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->Delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data=doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function editedoctor(Request $request, $id)
    {
        $doctor=doctor::find($id);
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->specialty=$request->specialty;
        $doctor->room=$request->room;

        $image=$request->file;

        if($image)
        {


        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $doctor->image=$imagename;
        }

        $doctor->save();
        return redirect()->back();


    }
    public function emailview($id)
    {
        $data=appoinment::find($id);
        return view('admin.email_view',compact('data'));
    }
   
   /* public function sendemail(Request $request,$id)
    {
        $data=appoinment::find($id)
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
            
        ];
        Notification::send($data,new MyFirstNotification($details));
        
        return redirect()->back();
    } */
    public function showappointments()
    {
        $data=appoinment::all();
        return view('doctor.home',compact('data'));
    }
    
    public function added(Request $request){
        $data =new Medicine;
        $data->name=$request->name;
        $data->save();

        return redirect()->back();
    }

    public function AddNews(){
        return view('admin.AddNews');
    }
    public function Addn(Request $request)
    {
        $News=new News();

        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('Newsimage',$imagename);
        $News->image=$imagename;

        $News->Title=$request->Title;
        $News->status=$request->status;
        $News->Content=$request->Content;
        

        $News->save();
        return redirect()->back();


    }
    public function uploadPhoto(Request $request)
{
    $user = User::findOrFail($request->user_id);

    // Validate the uploaded file
    $request->validate([
        'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Store the uploaded file
    $path = $request->file('profile_photo')->store('public/profile-photos');

    // Update the user's profile_photo field with the file path
    $user->profile_photo = $path;
    $user->save();

    return redirect()->back()->with('success', 'Profile photo uploaded successfully.');
}
}
