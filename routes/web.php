<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;




Route::group(['middleware'=>'sitesetting'], function() {


    Route::get('/',[PageHomeController::class,'index'])->name('anasayfa');
    Route::get('/hakkimizda',[PageController::class,'hakkimizda'])->name('hakkimizda');
    Route::get('/iletisim',[PageController::class,'iletisim'])->name('iletisim');
    Route::post('/iletisim/kaydet',[AjaxController::class,'iletisimkaydet'])->name('iletisim.kaydet');


    Route::get('/urunler',[PageController::class,'urunler'])->name('urunler');
    Route::get('/kadin-urun',[PageController::class,'urunler'])->name('kadin-urun');
    Route::get('/erkek-urun',[PageController::class,'urunler'])->name('erkek-urun');
    Route::get('/cocuk-urun',[PageController::class,'urunler'])->name('cocuk-urun');

    Route::get('/urundetay',[PageController::class,'urundetay'])->name('urundetay');
    Route::get('/one-cikan-urun',[PageController::class,'urundetay'])->name('onecikan');

    Route::get('/sepet',[PageController::class,'sepet'])->name('sepet');
    Route::get('/odeme',[PageController::class,'odeme'])->name('odeme');
    Route::get('/satinal',[PageController::class,'satinal'])->name('satinal');
    Route::get('/yonet',[PageController::class,'admin'])->name('admin');
});





