<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Submission;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendMailController;

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

//--------------------question 1---------------------
Route::get('/', function () {
    return view('welcome');
});
Route::view('/value','addition');
Route::post('/sum',[Submission::class,'addition']);


/// ------------------question 2---------------
Route::get('/hi',[ProfileController::class,'index']);

Route::get('/details',[ProfileController::class,'uploadpage']);

Route::post('/uploadproduct',[ProfileController::class,'store']);

Route::post('/show',[ProfileController::class,'show']);

Route::get('/download/{file}',[ProfileController::class,'download']);

Route::get('/view/{is}',[ProfileController::class,'view']);



//------------------------Question 3----------------
Route::view('/sendmail','compose')->name('compose');
Route::post('/send',[SendMailController::class,'send'])->name('send.email');




