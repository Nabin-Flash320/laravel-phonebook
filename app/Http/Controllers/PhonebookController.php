<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phonebooks;
use Illuminate\Support\Facades\DB;

class PhonebookController extends Controller
{
    
    public function index(){
        return view('list');
    }

    public function list_all(){

        $data = DB::select('select * from phonebooks');
        // dd($data);
        return view('list', ['datas'=>$data]);
    }

    public function store(Request $request){
        $details = $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'address' => 'required'
        ]);
        Phonebooks::create([
        'Name' => $request['name'],
        'Phone_number' => $request['phone'],
        'Address' => $request['address']
        ]);
        return redirect('/phonebook/list');
    }

    public function edit($id){
        $details = Phonebooks::find($id);
        return view('edit', ['detail'=>$details]);
    }

    public function update(Request $request, $id){
        $details = $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'address' => 'required'
        ]);
        DB::table('phonebooks')->where('id', $id)->update([
        "Name"=>$request['name'], 
        "Phone_number"=>$request['phone'],
        "Address"=>$request['address']
        ]);
        
        return redirect('/phonebook/list');
    }

    public function delete($id){
        Phonebooks::find($id)->delete();
        return redirect('phonebook/list');
    }
}