<?php

namespace App\Http\Controllers;
// namespace App\Models;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
// use App\Models\registration; 
use Illuminate\Support\Facades\Session;
use Auth;
use DB;
use Illuminate\Support\Facades\Crypt;



class registrationController extends Controller
{
    //
    public function index(){
        return view('registration');
    }
    public function insert(Request $req){
        $valid = $req->validate([
            'email' => 'required | email',
            'pass' => 'required | min:4'
        ],
        ['email.email' => 'Email Formate Invalid',
        'email.unique' => 'Email alredy assigned',
         'pass.required' => 'PLease Enter Password',
         'pass.min' => 'password must beb atlest 4 alpha-numeric'
        ]
);

        if($valid){
            // $registration = new registration;
            // $reg = new registration;
            // $reg->email = $req->email;
            // $reg->password = $req->pass;
            // $reg->save();
            // return "gi";
            // return $req->ip2long();
            // if (Auth::attempt(['email' => $req->email, 'password' => $req->pass])) {
            //     // Authentication passed...
            //     return redirect('profile');
            // }else{
            //     return "not match";
            //     return redirect('registration');
            // }

            // $user_data = array(
            //     'email'  => $req->get('email'),
            //     'password' => $req->get('password')
            //    );
               
            //    if(Auth::attempt($user_data))
            //    {
                
            //     return redirect('profile');
            //    }
            //    else
            //    {
            //     return $user_data;
            //     return back()->with('error', 'Wrong Login Details');
            //    }

            $user = DB::table('registrations')
                ->select('email','password')
                // ->where('email', '=', $req->email)
                // ->where('password', '=', $req->pass)
                ->get();

            // $user = DB::table('registrations')->where('email', $req->email)
            //                                 ->where('password', $req->pass)
            //                                 ->pluck('email','password');
// return $user;
            // if($user->password == $req->pass){
            $req->session()->put('userEmail', $req->email);
            Session::flash('message','Log in Successfull.'); 

            // $encrypted_password = crypt::encrypt($req->pass);
            // echo $encrypted_password."<br>";
            
            // $decrypt= Crypt::decrypt($encrypted_password); 
            // echo  $decrypt . "<br>";
            // return strlen($encrypted_password);    
            return redirect('profile');
            // return redirect()->route('profile',['data', $user]);
            
        }
    }

    public function sessiondelete(){
        session()->forget('userEmail');
        return redirect('/registration');
    }

    public function g()
    {
        return Http::get("https://mocki.io/v1/d4867d8b-b5d5-4a48-a4ab-79131b5809b8");
    }
}