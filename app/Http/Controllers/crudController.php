<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class crudController extends Controller
{
    //
    public function index(){
        return view('crudinsert');
    }
    public function insert(Request $request){
        // return "hello insert";

        // return $request->input();

        // $email = $request->input('email');
        // $uri = $request->path();
        // return $email . "<br>" . $uri;

        // if ($request->has('email')) {
        //     return "yes";
        // }

        // return $request->all();

        // return $request->except(['email']);

        // return  $request->file('img');   

        $valid = $request->validate([
            'email' => 'required | max:20 | unique:test,email',
            'pass' => 'required | min:4'
        ]);

        if($valid)
            return "User Authorized";
        else
            return "User Not Authorize";
        // return $request->all();
        // return DB::select('select * from test');

    }
}
