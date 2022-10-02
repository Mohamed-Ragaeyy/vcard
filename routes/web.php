<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\profilecontroller;
use Illuminate\Support\Facades\Route;

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
    return view('profile.index');
})->middleware("auth");

      /**.... admin.... */
Route::get('/register',[App\Http\Controllers\authcontroller::class , 'register']);
Route::post('/registerrequest',[authcontroller::class , 'registerrequest']);
Route::get('/login',[App\Http\Controllers\authcontroller::class ,'login'])->name("login");
Route::post('/loginrequest',[authcontroller::class , 'loginrequest']);
Route::get('/logout',[App\Http\Controllers\authcontroller::class ,'logout']);

      /**... profile... */
Route::get('name/{username}' , [profilecontroller::class , "profile"]);
Route::get("delete/{id}" , [profilecontroller::class , "delete"])->middleware("auth");
Route::get('index/' , [profilecontroller::class , "index"])->middleware("auth");
Route::get('contact/' , [profilecontroller::class , "contact"])->middleware("auth");
Route::get('get/profiles' , [profilecontroller::class , "profiles"]);
Route::post("store" , [profilecontroller::class , "store"])->middleware("auth");
Route::get("edite/{profile}" , [profilecontroller::class , "edite"])->middleware("auth");
Route::post("update" , [profilecontroller::class , "update"])->middleware("auth");



