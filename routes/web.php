<?php

use App\Http\Controllers\pdfController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});


Route::get('invoice',[pdfController::class,'index'])->name('invoice');
Route::get('invoice-pdf/{type}',[pdfController::class,'pdf'])->name('invoice.pdf');

 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
