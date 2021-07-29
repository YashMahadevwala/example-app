<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Http\UploadFile;
use App\Models\File;




class fileUploadController extends Controller
{
    //
    public function index(){
        return view('file_uploading');
    }

    public function show(Request $request){
        $valid = $request->validate([
            'file' => 'required', 
        ],[
            'required' => 'file upload is compulasory'
        ]);

        // return json_encode($request->file);;
        // echo "<pre>";
        // print_r($request->file);
        // echo "</pre>";

        // return $request->file[1];

        // $fileModel = new File;
        // $file = $request->file('file');
        // echo $file->getClientOriginalName() . "<br>";
        // echo $file;


        $file = $request->file('file');
        echo $file->getClientOriginalName() . "<br>";

        echo $file->getClientOriginalExtension() . "<br>";

        echo $file->getRealPath() . "<br>";

        echo $file->getSize() . "<br>";

        echo $file->getMimeType() . "<br>";

        $destinationPath = 'image/';
        if($file->move($destinationPath,$file->getClientOriginalName())){
            echo "done";
        }else{
            echo "Not";
        }

   }

}