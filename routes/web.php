<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\DxpController;

Route::get('/', function () {
    $role = request()->get('role') === 'admin' && request()->get('key') === '12345'
        ? 'admin'
        : 'user';
    session(['role' => $role]);
    return view('home');
});




Route::view('/home', 'home')->name('home');

//  Route::view('/platform', 'dxp_platform')->name('platform');



Route::get('/admin', function () {
    if (session('role') !== 'admin') {
        return redirect('/'); // block users
    }

    // admin  view page not access user role
    if (session('role') !== 'user') {
    return view('admin');
     }
})->name('admin');




  Route::get('/dxp.index', [DxpController::class, 'index'])->name('dxp.index');

// Hero CRUD
Route::get('/hero/create', [DxpController::class, 'createHero'])->name('hero.create');
Route::post('/hero/store', [DxpController::class, 'storeHero'])->name('hero.store');

// Benefit CRUD
Route::get('/benefit/create', [DxpController::class, 'createBenefit'])->name('benefit.create');
Route::post('/benefit/store', [DxpController::class, 'storeBenefit'])->name('benefit.store');

// Solution CRUD
Route::get('/solution/create', [DxpController::class, 'createSolution'])->name('solution.create');
Route::post('/solution/store', [DxpController::class, 'storeSolution'])->name('solution.store');










// delete update



// HERO
Route::get('/hero/{id}/edit', [DxpController::class, 'editHero'])->name('hero.edit');
Route::post('/hero/{id}/update', [DxpController::class, 'updateHero'])->name('hero.update');
Route::delete('/hero/{id}/delete', [DxpController::class, 'deleteHero'])->name('hero.delete');

// BENEFIT
Route::get('/benefit/{id}/edit', [DxpController::class, 'editBenefit'])->name('benefit.edit');
Route::post('/benefit/{id}/update', [DxpController::class, 'updateBenefit'])->name('benefit.update');
Route::delete('/benefit/{id}/delete', [DxpController::class, 'deleteBenefit'])->name('benefit.delete');

// SOLUTION
Route::get('/solution/{id}/edit', [DxpController::class, 'editSolution'])->name('solution.edit');
Route::post('/solution/{id}/update', [DxpController::class, 'updateSolution'])->name('solution.update');
Route::delete('/solution/{id}/delete', [DxpController::class, 'deleteSolution'])->name('solution.delete');
