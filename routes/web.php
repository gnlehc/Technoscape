<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerctrl; // linked with our made controlers
use App\Http\Controllers\loginctrl;
use App\Http\Controllers\homectrl; 
use App\Http\Controllers\userctrl; 
use App\Http\Controllers\paymentctrl; 
use App\Http\Controllers\dashboardctrl; 




Route::get('/', [homectrl::class, 'home']);
Route::get('/user', [registerctrl::class, 'show']);
Route::get('/register', [registerctrl::class, 'register']);
Route::post('/store-data', [registerctrl::class, 'storeData']);
Route::get('/login', [loginctrl::class, 'login'])->middleware('guest');
Route::post('/login', [loginctrl::class, 'authenticate']);
Route::get('/dashboard', [dashboardctrl::class, 'dashboard']);
Route::get('/payment', [paymentctrl::class, 'payment']);
Route::post('/payflow', [paymentctrl::class, 'show']);
Route::post('/store-pay', [paymentctrl::class, 'storePay']); 
Route::get('/editData/{id}', [registerctrl::class, 'edit'])->name('editData');
Route::patch('/updateData/{id}', [registerctrl::class, 'update'])->name('update');
Route::delete('/delete/{id}', [registerctrl::class, 'delete'])->name('delete');

