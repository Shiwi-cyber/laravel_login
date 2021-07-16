<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginnewController;
use App\Http\Controllers\teacherregisterController;
use App\Http\Controllers\studentregisterController;



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


//check
Route :: get('/new', function(){
    return view('new');

});

Route::get('/', function () {
    return view('/homepage');
});



//routes for login
Route :: post ( "/homepage", [loginController:: class , 'login']);
Route :: view("/homepage", "homepage");


Route :: get ('users/index', function(){

        // echo "done";
    return view('/signup');
});


//routes for signup

Route :: post ("/users/index", [signupController :: class , 'signup']);
Route :: view("/users/index", "signup");



Route :: get ('/againlogin', function(){

    return view('/homepage');
});




// Routes for School Management System
Route :: get ('/role', function(){


    return view('role');
});



Route:: get ('/loginpage', function(){

    return view('login');
});

Route ::get ('/registerpage', function(){
    return view('role');
});



Route :: get ('/studentform',function(){
    return view('studentform');
});


Route :: get ('/teacherform', function(){
    return view('teacher');
});



Route :: post ( "/loginnew", [loginnewController:: class , 'loginnew']);
Route :: view("/loginnew", "welcome");


Route :: post('/dashboard', [teacherregisterController::class, 'register']);
Route :: view('/dashboard', "dashboard");



Route :: post('/dashboard2', [studentregisterController::class, 'register2']);
Route :: view('/dashboard2', "dashboard2");


Route :: view('/check', 'check');

Route :: view('/sections', 'login');

// Route ::  get ('/home', function(){
//  return view('home');
// });



// Route :: post ('/loginme', 'loginController@login');

// Route :: get ('/loginme', function(){
//     return view('loginme1'); 
//    });



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
