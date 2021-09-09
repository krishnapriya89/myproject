<?php

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
    return view('welcome');
});
Route::view('/','home');
Route::view('sign','signin');
Route::view('stud','studreg');
Route::view('hf','headfoot');
Route::view('adh','adminhome');
Route::view('statd','attendance');
Route::view('adminstud','adminstud');
Route::view('news','adminnews');
Route::view('fee','adminfee');