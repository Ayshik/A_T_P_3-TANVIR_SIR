<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
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

//Route::get("text/{id}",[usercontroller::class,'show']);
//Route::get('/text','App\Http\Controllers\usercontroller@show');
Route::get('/',[userController::class,'home'])->name('home');
Route::get('/products/services',[userController::class,'service'])->name('service');
Route::get('/ourteams',[userController::class,'ourteam'])->name('ourteam');
Route::get('/aboutus',[userController::class,'aboutus'])->name('aboutus');
Route::get('/contactus',[userController::class,'contactus'])->name('contactus');