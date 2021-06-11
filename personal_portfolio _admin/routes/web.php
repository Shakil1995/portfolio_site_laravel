<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServiceController;


Route::get('/',[HomeController :: class,'HomeIndex']);

Route::get('/visitor',[VisitorController :: class,'VisitorIndex']);

// ServiceController Route
Route::get('/service',[ServiceController :: class,'ServicesIndex']);

Route::get('/getServicesData',[ServiceController :: class,'getServiceDataAll']);

Route::post('/ServiceDelete',[ServiceController :: class,'ServiceDelete']);

