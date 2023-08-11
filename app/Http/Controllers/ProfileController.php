<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\ProfileImage;
class ProfileController extends Controller
{


    public function upload(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        // Validate the uploaded file
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Store the uploaded file
        $path = $request->file('photo')->store('public/images');
    
        // Create a new image record and associate it with the user
        $image = new Image();
        $image->path = $path;
        $image->user_id = $user->id;
        $image->save();
    
        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
    
    
}    