<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use DB;
use App\Models\registration;



class databaseController extends Controller
{
    public function index() {

      // in this page all query perform with normale methods.

// Select query with or without perameter
         // select database query with qyery buider
         // $data = DB::select('select * from registrations where email = ? and password = ?',['king@gmail.com','king']);
         // $data = DB::select('select * from registrations');
         // $data = registration::all();
         // $data = DB::select('select * from registrations where email = :email',['email' => 'king@gmail.com']);


// insert query
         // $data = DB::insert('insert into registrations (email, password) values (?, ?)', ['xy@gmail.com', 'xyz']);
         
// update
// return affected rows
         // $data = DB::update('update registrations set password = "zyx" where email = ?',['xyz@gmail.com']);
// delete
// return affected rows
            // $data = DB::delete('delete from registrations where password = ?',['xyz']);
         




// using query builder
         
// select record
// using table functions
            // $data = DB::table('registrations')->get();

// get first column
            // $data = DB::table('registrations')->where('email','king@gmail.com')->first();

// get single value from row
// in value function only one perameter
            // $data = DB::table('registrations')->where('email','king@gmail.com')->value('password');

// find single row using fincd()
            // $data = DB::table('registrations')->find(1);

// collections of column values
            // $data = DB::table('registrations')->pluck('password','id');

// 

            // return $data;

      


     }

}