<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlatformController;

Route::get('/platformx', [PlatformController::class, 'show'])->name('platform');


Route::get('/', function () {

    return view('home');
    
});


Route::view('/home', 'home')->name('home');

Route::view('/platform', 'dxp_platform')->name('platform');

Route::get('/check-ip', function (\Illuminate\Http\Request $request) {
    dd($request->ip());
});