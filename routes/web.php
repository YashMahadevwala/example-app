<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\testController;
use App\Http\Controllers\testController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\bladeController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\localizationController;
use App\Http\Controllers\fileUploadController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\collectionsController;
use App\Http\Controllers\httprequestController;
use App\Http\Controllers\encdecController;
use App\Http\Controllers\databaseController;
use App\Http\Controllers\addUserController;
use App\Http\Controllers\bladetestingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    return view('demo');
});


Route::get('/role', function () {
    return view('role');
})->middleware('role');

// Route::get('/user/{age}', function ($age) {
//     return view('user');
// })->middleware('aut','yes:true');

// Route::view('/usernot','usernot');
// Route::view('/uservari','uservari');

Route::get('/user/verify/{age}', function ($age) {
    return view('user');
})->middleware('verify');

Route::view('/usernot/verify','usernot');
Route::view('/uservari/verify','uservari');

Route::get('test',[testController::class,'index']);
// Route::get('test/{pera}',[testController::class,'index']);

Route::view('testview','test');

Route::get('testview/{greet}/{name}',function($greet,$name){
    return view('test',['name'=>$name,'greet'=>$greet]);
});

Route::get('testcontroltoview',[testController::class,'toview']);

Route::view('viewwithpera','toview',['greet'=>'hello','name'=>'king']);

Route::view('testingblade','testingblade',[ 'user' => ['king','yash','abhishek'] ]);

Route::get('testingblade/{id}',function($id){
    return view('testingblade',['id'=>$id]);
});

Route::get('/crud',[crudController::class,'index']);
Route::post('/crud',[crudController::class,'insert']);

// Route::view('bladedirective','bladedirective');

Route::get('bladedirective',[bladeController::class,'index']);


//registration
Route::get('/registration',[registrationController::class,'index']);
Route::post('/registration',[registrationController::class,'insert']);
Route::get('/profile',function(){
    if(session()->has('userEmail')){
        // echo url()->previous();
        return view('profile');
    }else{
        // echo "Session Not Exist";
        return redirect('/registration');
    }
})->name('profile');

Route::get('/delete',[registrationController::class,'sessiondelete']);

Route::get('/g',[registrationController::class,'g']);

// Route::get('/localization',[localizationController::class,'index']);

// Route::view('localization','localization');


// Route::get('localization/{local}',function($local){
//     App::setLocale($local);
//     return view('localization');
// });

Route::get('/file',[fileUploadController::class,'index']);

Route::post('/file',[fileUploadController::class,'show']);

Route::get('/sendbasicmail',[mailController::class,'basic_email']);

Route::get('/collections',[collectionsController::class,'index']);

Route::get('/http',[httprequestController::class,'index']);

Route::get('/encdec',[encdecController::class,'index']);

Route::get('/database',[databaseController::class,'index']);


// user registration
Route::get('/adduser',[addUserController::class,'index']);
Route::post('/adduser',[addUserController::class,'adduser']);
Route::get('/show',[addUserController::class,'show']);
Route::get('/edit/{id}',[addUserController::class,'edit']);
Route::post('/update',[addUserController::class,'update']);
Route::get('/delete/{id}',[addUserController::class,'delete']);


Route::view('content','contant');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('bladetesting',[bladetestingController::class,'index']);