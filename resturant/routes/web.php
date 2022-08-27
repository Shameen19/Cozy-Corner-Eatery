<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('home');
});
Route::get("/home",[HomeController::class,"index"]);
Route::post("/home",[HomeController::class,"makereservation"]);
Route::get("/login",[HomeController::class,"login"]);
Route::post("/login",[HomeController::class,"login"]);
Route::get("/admin",[HomeController::class,"adminlogin"]);
Route::post("/admin",[HomeController::class,"login"]);
Route::post('/admin', 'App\Http\Controllers\HomeController@match');
Route::get('/registeration',[HomeController::class,"registeration"]);
Route::post('/registeration', 'App\Http\Controllers\HomeController@store');
Route::get("/admindashboard",[HomeController::class,"dashboard"]);
Route::get('/addproduct',[HomeController::class,"addproduct"] );
Route::post('/addproduct', 'App\Http\Controllers\HomeController@adding');
Route::get('/updateproduct',[HomeController::class,"updatedish"] );
Route::post('/updateproduct', 'App\Http\Controllers\HomeController@updatedishrecord');
Route::get('/deleteproduct',[HomeController::class,"deletedish"] );
Route::post('/deleteproduct', 'App\Http\Controllers\HomeController@deletedishrecord');
Route::get('/dishesdashboard',[HomeController::class,"dishesdashboard"] );
Route::get('/updatepass',[HomeController::class,"updatepass"] );
Route::get('/menu',[HomeController::class,"menu"] );
Route::get('/profile',[HomeController::class,"profile"] );
Route::get('/updatepassword',[HomeController::class,"updatepassworduser"] );
Route::get('/updateemail',[HomeController::class,"updateemailuser"] );
Route::get('/updateaddress',[HomeController::class,"updateaddressuser"] );
Route::post('/profile', 'App\Http\Controllers\HomeController@reviews');
Route::post('/updatepassword', 'App\Http\Controllers\HomeController@updateuserpassword');
Route::post('/updateemail', 'App\Http\Controllers\HomeController@updateuseremail');
Route::post('/updateaddress', 'App\Http\Controllers\HomeController@updateuseraddress');
Route::get("/addtocart",[HomeController::class,"order"]);
Route::post('/addtocart', 'App\Http\Controllers\HomeController@addtocart');