<?php
    
use App\Http\Controllers\imagectrl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerctrl; // linked with our made controlers
use App\Http\Controllers\loginctrl;
use App\Http\Controllers\homectrl; 
use App\Http\Controllers\paymentctrl; 
use App\Http\Controllers\dashboardctrl; 




Route::get('/', [homectrl::class, 'home']);
Route::get('/user', [registerctrl::class, 'show']);
Route::get('/register', [registerctrl::class, 'register']);
Route::post('/store-data', [registerctrl::class, 'storeData']);
Route::get('/login', [loginctrl::class, 'login'])->middleware('guest');
Route::post('/login', [loginctrl::class, 'authenticate']);
Route::get('/dashboard', [dashboardctrl::class, 'dashboard']);

Route::get('/payflow', [paymentctrl::class, 'show']);
Route::get('/payment', [paymentctrl::class, 'payment']);
Route::post('/store-pay', [paymentctrl::class, 'storePay']);
Route::get('/editPay/{id}', [paymentctrl::class, 'editPay'])->name('editPay');
Route::patch('/updatePay/{id}', [paymentctrl::class, 'updatePay'])->name('updatePay');
Route::delete('/deletePay/{id}', [paymentctrl::class, 'deletePay'])->name('deletePay');


Route::get('/editData/{id}', [registerctrl::class, 'edit'])->name('editData');
Route::patch('/updateData/{id}', [registerctrl::class, 'update'])->name('update');
Route::delete('/delete/{id}', [registerctrl::class, 'delete'])->name('delete');
Route::get('/image', [imagectrl::class,'index'])->name('image.index');
Route::post('/image', [imagectrl::class,'store'])->name('image.store');

