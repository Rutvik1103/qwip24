<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::view('/platform', 'dxp_platform')->name('platform');