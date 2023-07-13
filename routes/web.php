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


Route::get('/',[App\Http\Controllers\indexController::class,'index']);

Route::post('/registeration',[App\Http\Controllers\indexController::class,'apply'])->name('apply');

Route::get('/dashboard',[App\Http\Controllers\indexController::class,'form'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
