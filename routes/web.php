<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\cPasien;
use App\Http\Controllers\cPetugas;
use App\Http\Controllers\dataPasienController;
use App\Http\Controllers\LayoutController;
use Database\Seeders\DataPasien;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('login',[LoginController::class, 'index'])->name('login');

Route::get('/home',[LayoutController::class,'index'])->middleware('auth');

Route::get('/menu1',[LayoutController::class,'hal1'])->middleware('auth');

Route::get('/menu2',[LayoutController::class,'hal2'])->middleware('auth');

Route::put('/dataPasien/{id}',[dataPasienController::class,'update']);

Route::put('/dataPasien/{id}',[dataPasienController::class,'create']);

Route::get('/dataPasien/{id}',[dataPasienController::class,'destroy']);


Route::group(['middleware'=>['cekLevel:1']],function(){
    Route::get('/menu1',[LayoutController::class,'hal1'])->middleware('auth'); 
});

Route::group(['middleware'=>['cekLevel:2']],function(){
    Route::get('/menu1',[LayoutController::class,'hal1'])->middleware('auth'); 
});

Route::group(['middleware'=>[,'cekLevel:1,2']],function(){
    Route::resource('/dataPasien', dataPasienController::class);
    Route::get('/menu2',[LayoutController::class,'hal2'])->middleware('auth');  
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout','logout');
});

Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware'=>['cekUserLogin:1']],function(){
        Route::resource('cPetugas', cPetugas::class);
    });

    Route::group(['middleware'=>['cekUserLogin:2']],function(){
        Route::resource('cPasien', cPasien::class);
    });     
});