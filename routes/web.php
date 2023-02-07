<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hsmController;

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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('book', function () {
    return view('book');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('getdata', function () {
    return view('getdata');
});
Route::get('about', function () {
    return view('about');
});
Route::get('room', function () {
    return view('room');
});
Route::get('gallery', function () {
    return view('gallery');
});
Route::post('/',[HsmController::class,'Insert']);
Route::get('getdata',[HsmController::class,'getdata']);
Route::get('book',[HsmController::class,'book']);
Route::get('delete/{id}',[HsmController::class,'deletedata']);
Route::get('editdata/{id}',[HsmController::class,'editdata']);
Route::post('update',[HsmController::class,'update']);