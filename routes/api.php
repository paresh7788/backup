<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\devicecontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('list',[devicecontroller::class,'list']);
Route::get('list/{id}',[devicecontroller::class,'specificlist']);

Route::post('add',[devicecontroller::class,'add']);

Route::put('update',[devicecontroller::class,'update']);

Route::delete('delete/{id}',[devicecontroller::class,'delete']);
