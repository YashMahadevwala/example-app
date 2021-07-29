<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class localizationController extends Controller
{
    //
    public function index(Request $request,$locale) {
        //set’s application’s locale
        // app()->setLocale($locale);
        
        //Gets the translated message and displays it
        // echo 'lang.msg';
        // return ('lang.msg');
     }
}
