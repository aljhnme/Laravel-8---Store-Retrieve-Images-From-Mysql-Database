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

Route::get('/images_f',[App\Http\Controllers\PhotoController::class,'images_f']);

Route::get('/',[App\Http\Controllers\PhotoController::class,'fetch_img']);

Route::post('/insert',[App\Http\Controllers\PhotoController::class,'insert_img'])->name('insert.data');