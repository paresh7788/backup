<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\addstudentcontroller;
use App\Http\Controllers\DisplayController;
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

Route::get ('/', [HomeController::class, 'index'])->name('home');

Route::get('/adstu',[addstudentcontroller::class,'create'])->name('add.student');

Route::post('/adstu',[addstudentcontroller::class,'keep']);



Route::get('/students', [DisplayController::class, 'index'])->name('display.index');