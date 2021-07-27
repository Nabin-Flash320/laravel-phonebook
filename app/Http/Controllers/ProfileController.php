<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    

    public function profile(){

        $datas = DB::select("select * from phonebook ");
        $users_data = array();
        foreach($datas as $data){
            //Get the data inserted by the logged in user only.
            if ($data->user_id == Auth::user()->id){ 
                array_push($users_data, $data);
            }
        }
        return view('profile', ['datas'=>$users_data]);
    }

}
