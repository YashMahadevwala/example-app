<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Http\UploadFile;
// use App\Models\File;
use Mail;




class mailController extends Controller
{
    public function basic_email() {
        $data = array('name'=>"Yash");
     
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('trainee15.dynamicdreamz@gmail.com', 'Dynamic Dreams')->subject
              ('Laravel Basic Testing Mail');
           $message->from('trainee15.dynamicdreamz@gmail.com','DD');
        });
        echo "Basic Email Sent. Check your inbox.";
     }

}