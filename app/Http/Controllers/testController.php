<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //if url exist data like perameter to declare in method like index($pera)
    public function index(){
        $datas =  ['Name'=>'Yash','Age'=>20]; //it's treate as object
        // echo "Hello, ".$pera;
        // echo $data;
        foreach($datas as $data){
            echo $data . "<br>";
        }
        echo "Hii From test controller in index method";
    }

    public function toview(){
        return view('toview');
        //we can pass array data with 2nd perameter like
        // ('toview','pera / variable')
    }
}
