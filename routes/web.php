<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;

Route::get('/',[PageHomeController::class,'index'])->name('anasayfa');
Route::get('/hakkimizda',[PageController::class,'hakkimizda'])->name('hakkimizda');
Route::get('/iletisim',[PageController::class,'iletisim'])->name('iletisim');
Route::get('/urunler',[PageController::class,'urunler'])->name('urunler');
Route::get('/urundetay',[PageController::class,'urundetay'])->name('urundetay');
Route::get('/sepet',[PageController::class,'sepet'])->name('sepet');
Route::get('/odeme',[PageController::class,'odeme'])->name('odeme');
Route::get('/satinal',[PageController::class,'satinal'])->name('satinal');
