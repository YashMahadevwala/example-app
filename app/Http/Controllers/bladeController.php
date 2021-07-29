<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{
    //
    public function index(){
        $users = [
            [ 'id' => 1, 'name' => 'Hardik' ],
            [ 'id' => 2, 'name' => 'Paresh' ],
            [ 'id' => 3, 'name' => 'Naresh' ]
        ];
        return view('bladedirective', compact('users'));
    }
}
