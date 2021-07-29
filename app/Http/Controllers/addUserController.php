<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\user;
use DB;




class addUserController extends Controller
{
    public function index() {
        return view('addUser');
     }

     public function adduser(Request $req){

         $user = new user;
        // echo "<pre>";
        // print_r($req->file('avtar'));
        // echo "</pre>";


        // validation
        $req->validate([
            'email' => 'required | email | unique:user,email',
            'pass' => 'required | min:4 | alpha_num',
            'mobile' => 'min:10 | max:10',
            'createDate' => 'required',
            'address' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required | max:6 | min:6',
            'avtar' => 'required | mimes:png,jpg,jpeg',
        ]);


        // dd($req->all());
        //  return $req->all();
        // return $req->url();
        $destinationPath = 'images/';
        $file = $req->file('avtar');
         $user->email = $req->email;
         $user->password = $req->pass;
         $user->createDate = $req->createDate;
         $user->mobile = $req->mobile;
         $user->address = $req->address;
         $user->address2 = $req->address2;
         $user->city = $req->city;
         $user->state = $req->state;
         $user->zip = $req->zip;
         $user->avtar = $file->getClientOriginalName();
         $user->remember_token = $req->_token;
         $user->save();
         $file->move($destinationPath,$file->getClientOriginalName());
        return redirect('show');

     }

     public function show(){
         
        $datas = user::all();
        // return compact('data');
         return view('userShow',compact('datas'));
     }

     public function edit($id){
        //  return $id;
        $data = user::where('id',$id)->get();
        // return $data;
        return view('addUser',compact('data'));
     }

     public function update(Request $req)
     {
        //  return $req;

        $req->validate([
            'email' => 'required | email',
            'pass' => 'required | min:4 | alpha_num',
            'mobile' => 'min:10 | max:10',
            'createDate' => 'required',
            'address' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required | max:6 | min:6',
            'avtar' => 'mimes:png,jpg,jpeg',
        ]);


        $user = new user;

        $user = user::find($req->id);
        // return $user;
          
         $user->email = $req->email;
         $user->password = $req->pass;
         $user->createDate = $req->createDate;
         $user->mobile = $req->mobile;
         $user->address = $req->address;
         $user->address2 = $req->address2;
         $user->city = $req->city;
         $user->state = $req->state;
         $user->zip = $req->zip;
         $user->remember_token = $req->_token;
         if($req->avtarname == ''){
            $destinationPath = 'images/';
            $file = $req->file('avtar');
            $user->avtar = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
            
        }if($req->file('avtar') != ''){
            $destinationPath = 'images/';
            $file = $req->file('avtar');
            $user->avtar = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
        }
         $user->save();
         
        return redirect('show');

    }

        public function delete($id)
        {
            $user = user::find($id);
            $user->delete();
            return redirect('show');
        }

}