<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\OldPasswordMatch;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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


    public function change_user_name(){
        return view('changeUserName');
    }
    public function update_username(Request $request, $id){
        $request->validate([
            'name' => 'required',
        ]);
        $user = User::where(['id'=>$id])->first();
        $user->name = $request->name;
        $user->save();
        return redirect()->route('phonebook.user.profile')->with('usernameSuccess', 'Username changed successfully!');
    }

    public function change_email(){
        return view('changeEmail');
    }
    public function update_email(Request $request, $id){
        $request->validate([
            'email' => 'required | email',
        ]);
        $user = User::where(['id'=>$id])->first();
        $user->email = $request->email;
        $user->save();
        return redirect()->route('phonebook.user.profile')->with('emailSuccess', 'Email changed successfully!');
    }

    public function change_password(){
        return view('changePassword');
    }
    public function update_password(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'old_password' => ['required', new OldPasswordMatch],
            'new_password' => ['required'],
            'confirm_new_password' => ['same:new_password'],
        ]);

        if($validator->fails()){
            return redirect()->back()->with('validationError', 'Invalid credintials');
        }


        $user = User::where(['id'=>$id])->first();
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return redirect()->route('phonebook.user.profile')->with('passwordChangeSuccess', 'Password changed successfully!');

        
    }

    
}
