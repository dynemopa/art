<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\CustumerController;

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


Route::get('/customer',[CustumerController::class,'index']);
Route::post('/customer', [CustumerController::class,'store']);
Route::get('/customer/view',[CustumerController:: class,'view']);
Route::get('/',[CustumerController:: class,'log']);
Route::get('/customer/delete/{id}',[CustumerController::class,'delete']);
Route::get('/customer/edit/{id}',[CustumerController::class,'edit']);
Route::post('/customer/update/{id}',[CustumerController::class,'update']);

