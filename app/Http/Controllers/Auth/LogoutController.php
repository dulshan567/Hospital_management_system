<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\doctor;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function destroy(){
        Auth::logout();
        $doctor =doctor::all();
        $news = News::all();
        
        return redirect()->route('/welcome',compact('news','doctor'));
    }
}
