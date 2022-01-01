<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\phonebook;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PhonebookController extends Controller
{
    
    public function index(){
        return redirect()->route('phonebook.list');
    }

    public function list_all(){

        $data = DB::select('select * from phonebook');
        return view('list', ['datas'=>$data]);
    }

    public function save(){
        return view('save');
    }

    public function store(Request $request){
        $details = $request->validate([
        'name' => 'required',
        'phonenumber' => 'required',
        'address' => 'required'
        ]);

        $u_id                            =   Auth::user()->id;
        $name                         = $request->get('name');
        $phone_number      = $request->get('phonenumber');
        $address                     = $request->get('address');

        DB::insert("insert into phonebook (Name, Phone_number, Address, user_id)  values (
            '$name', 
            '$phone_number', 
            '$address',
            '$u_id'
        )");
        return redirect()->route('phonebook.list');
    }

    public function edit($id){
        $details = DB::select("select * from phonebook where `id` = '$id'");
        return view('edit', ['details'=>$details[0]]);
    }

    public function update(Request $request, $id){

        $details = $request->validate([
        'name' => 'required',
        'phonenumber' => 'required',
        'address' => 'required'
        ]);

        
        DB::table('phonebook')->where('id', $id)->update([
        "Name"=>$request['name'], 
        "Phone_number"=>$request['phonenumber'],
        "Address"=>$request['address']
        ]);
        
        return redirect()->route('phonebook.user.profile');
    }

    public function delete($id){
        DB::table('phonebook')->where('id', $id)->delete();
        return redirect()->route('phonebook.user.profile');
    }
}