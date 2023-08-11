<?php

namespace App\Http\Controllers;
use App\Events\SendMessage;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorController\showadd;
use App\Models\Appoinment;
use App\Models\Doctor;
use App\Models\Image;
use App\Models\Medicine;
use App\Models\News; 
use App\Models\Message;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Illuminate\Support\Facades\Redirect;

/**
 * Summary of HomeController
 */
class HomeController extends Controller
{
    
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)

    {  if(Auth::id())
        
        {
            
            
            if(Auth::user()->usertype=='0')
            {
                $news = News::all();
                $doctor = doctor::all();
                return view('/welcome',compact('doctor','news'));
            }
            if(Auth::user()->usertype=='2')
            {
                $search =$request['search'];
                $user =User::all();
                $data=appoinment::all();
                $appointment = Appoinment::count();

                $search =$request['search']??"";
                if($search !="null"){
                    $data=appoinment::where('name','LIKE', "$search%")->orwhere('id','LIKE', "$search")->get();
        
        
                }else{
                    $data=appoinment::all();
        
                }
                
                if($search !="null"){
                
                
                return view('doctor.home',compact('data','appointment','search','user'));
                }
           
            }
            if(Auth::user()->usertype=='3')

            {
                $search =$request['search'];
                $data=Medicine::all();
                $medicine = Medicine::count();

                $search =$request['search']??"";
                if($search !="null"){
                    $data=Medicine::where('name','LIKE', "$search%")->orwhere('user_id','LIKE', "$search")->paginate(1);
        
        
                }else{
                    $data=Medicine::all();
        
                }
                
                if($search !="null"){
                
                
                return view('famacy.home',compact('data','medicine','search'));
                }
            }
            else
            {
                $appointment =Appoinment::count();
                $doctor =Doctor::count();
                $medicine =Medicine::count();
                return view('admin.home', compact('appointment','doctor','medicine'));

            }
            

        }
        else
        {
            return redirect()->back();
        }
        
    }
   
    public function indexs()
    {
        $doctor =doctor::all();
        if(Auth::id()){
            $doctor =doctor::all();
            return redirect('home');
        }
        else{
            $appoint = Appoinment::all();
        $doctor = doctor::all();
        return view('home',compact('doctor','appoint'));
    }
}
public function appoinment(Request $request)
{
    $data = new Appoinment;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->date = $request->date;
    $data->phone = $request->number;
    $data->message = $request->message;
    $data->doctor = $request->doctor;
    $data->status = 'In progress';
    $data->checked = 'Not Checked';

    if (Auth::id()) {
        $data->user_id = Auth::user()->id;
    }

    $data->save();

    $appointmentId = $data->id;

    // Flash the appointment ID to session
    Session::flash('appointment_id', $appointmentId);

    // Redirect back to the appointment form
    return Redirect::back();
}

public function myappointment(){
    if(Auth::id()){
        $userid=Auth::user()->id;
        $appoint=appoinment::where('user_id',$userid)->get();

        return view('user.my_appointment',compact('appoint'));


    }

   else{
    return redirect()->back();
   }
}

public function getappointment(){
    if(Auth::id()){
    $doctor = doctor::all();
   
    return view('/home',compact('doctor'));
}
else{
    return redirect()->back();
   }
}
    public function cansel_appoint($id){
   
        $data=appoinment::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function profile(Request $request){

        if(Auth::id()){
            $userid=Auth::user()->id;
            $user=Auth::user();
            $images = Image::where('user_id',$userid)->get();
            

           
    
            return view('user.profile',compact('images','userid','user'));
    
    
        }
    
       else{
        return redirect()->back();
       }

    }
    public function chat(){
        return view('chat');
    }
    /**
     * Summary of messeges
     * @return \Illuminate\Database\Eloquent\Collection|array<\Illuminate\Database\Eloquent\Builder>
     */
    public function messages(){
        return Message ::with('user')->get();
    }
    /**
     * Summary of messegeStore
     * @param Request $request
     * @return string
     */
    /*public function messageStore(Request $request){
        $user = Auth::user();

             $messages = $user->messages()->create([
            'message'=> $request->message
             ]);

             broadcast(new SendMessage($user , $messages))->toOthers();

        return 'message sent' ;
    }*/
   
    public function pharmacies(){
        return view('user.pharmacies');
    }

    public function viewdoctors(){
        $doctor =doctor::all();
        return view('user.doctors',compact('doctor'));
    }
  
    public function Contact(){
        return view('Contact');
    }
        public function about(){
        return view('aboutus');
    }
    public function news(){
        $news = News::all();
       
        return view('news',compact('news'));
        
    }
    public function apointhome(){
       return view('apointhome');
        
    }

}