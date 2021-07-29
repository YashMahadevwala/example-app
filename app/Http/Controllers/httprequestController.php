<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;




class httprequestController extends Controller
{
    public function index() {
      //   return Http::get('https://jsonplaceholder.typicode.com/todos/1');

      //   return $res->body();
      // get request
      // return Http::dd()->get('https://jsonplaceholder.typicode.com/todos/1');
      

      // post request
   //    $response = Http::post('https://jsonplaceholder.typicode.com/posts/', [
   //       'name' => 'Steve',
   //       'role' => 'Network Administrator',
   //   ]);
   //   return $response;


   $res = Http::get('https://jsonplaceholder.typicode.com/todos/',[
      "userId"=> '1',
      // "id"=> 10
      "completed"=> 'true'
      ]);

      // echo $res->successful();
      return $res;



     }

}