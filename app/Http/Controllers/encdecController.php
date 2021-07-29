<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;




class encdecController extends Controller
{
    public function index() {
         $data = 'Hello, this is plane text';

         // encrypted
         $encrpted = Crypt::encrypt($data);
         echo $data . "<br>";
         echo "This is Encrypted string that mention above " .$encrpted . "<br>";

         // decrpted
         $decrypted = Crypt::decrypt($encrpted);
         echo "This is Decrpted string that mention above <br>" .$decrypted . "<br>";

         // hashing password
         echo "This is hashing password <br>" . Hash::make($data) . "<br>";

         // Bcrypt
         $bcryptHashed = Hash::make($data, [
            'rounds' => 5,
        ]);
        echo "This is Bcrypt hashing password <br>" . $bcryptHashed . "<br>";


      //   Argon2
        $argon2Hashed = Hash::make($data, [
         'memory' => 1024,
         'time' => 2,
         'threads' => 2,
        ]);
        echo "This is Argon2 hashing password <br>" . $argon2Hashed . "<br>";

      //check text
         if (Hash::check('Hello', $bcryptHashed)) {
            return "Text Match";
         }else{
            return "Text Not Match";
         }
     }

}