<?php

use Illuminate\Support\Facades\Route;


//  index controller
Route::get('/',[App\Http\Controllers\indexController::class,'index']);

Route::post('/register',[App\Http\Controllers\indexController::class,'apply'])->name('apply');

Route::get('/tables',[App\Http\Controllers\indexController::class,'form']);
