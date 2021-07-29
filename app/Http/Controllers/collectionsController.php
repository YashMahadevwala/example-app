<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;





class collectionsController extends Controller
{
    public function index() {
   //    $collection = collect([
   //       [
   //           'user_id' => '1',
   //           'title' => 'Helpers in Laravel',
   //           'content' => 'Create custom helpers in Laravel',
   //           'category' => 'php'
   //       ],
   //       [
   //           'user_id' => '2',
   //           'title' => 'Testing in Laravel',
   //           'content' => 'Testing File Uploads in Laravel',
   //           'category' => 'php'
   //       ],
   //       [
   //           'user_id' => '3',
   //           'title' => 'Telegram Bot',
   //           'content' => 'Crypto Telegram Bot in Laravel',
   //           'category' => 'php'
   //       ],
   //   ]);

   //   echo $collection;
     
   //   $filter = $collection->filter(function($value,$key) {
   //    if ($value['user_id'] == 1) {
   //        return true;
   //    }
      // echo "<pre>";
      //   print_r($key);
      //   echo "</pre>";
//   });
   
      // return $filter;

      // return collect([1=>'king', 2=>'yash', 3=>'abhi'])->all();

      // return collect([1,2,3,4,5])->avg();

      // $coll = collect([1,2,3,4,5,6,7,8,9]);
      // $chunk = $coll->chunk(4);
      // // echo $coll;
      // echo $chunk;

      // return collect(str_split('AABBCCCD'));

      // $coll = collect([
      //    [1,2,3],
      //    [4,5,6],
      //    [7,8,9],
      // ]);
      // return $coll->collapse();

         // $col = collect(['name','age']);
         // return $col->combine(['king',20]);


         // $col = collect(['name','age']);
         // return $col->concat(['bool']);

         $col = collect([1,2,3,3,2,1]);
         
         // return $col->dd();


         return $col->diff([8,6,9,2,4,7]);




     }

}