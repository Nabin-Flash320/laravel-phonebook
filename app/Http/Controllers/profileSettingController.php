<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class profileSettingController extends Controller
{
    
    public function change_profile_picture(){
        return view('changeProfilePicture');
    }
    public function update_profile_picture(Request $request, $id){

        $request->validate([
            'image' => 'required | mimes:jpg,png,jpeg | max:10000',
        ]);
        
        $image_name = $id.'-profile.'.$request->image->extension();
    
        $request->image->move(public_path('image/profilePics'), $image_name);

        DB::table('users')->where('id', $id)->update([
            'image_path' => $image_name
            ]);

        return redirect()->route('phonebook.user.profile');
        
    }

}
