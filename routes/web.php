<?php

use Illuminate\Support\Facades\Route;
 

//  index controller
Route::get('/',[App\Http\Controllers\indexController::class,'index']);

Route::post('/register',[App\Http\Controller\indexController::class,'apply'])->name('apply');


//dashboard

Route::get('/dashboard',[App\Http\Controllers\dashboardController::class,'index']);

Route::get('/dashboard/applicants',[App\Http\Controllers\dashboardController::class,'table']);

// Route::get('/', function () {
//     return view('welcome');
// });
