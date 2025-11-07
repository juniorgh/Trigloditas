<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard','App\Http\Controllers\Admin\DashboardController@index')
    ->name('admin.dashboard');

    //cliente
    Route::post('/cliente/store','App\Http\Controllers\Admin\ClienteController@store')
    ->name('admin.cliente.store');

    Route::get('/cliente/create','App\Http\Controllers\Admin\ClienteController@create')
    ->name('admin.cliente.create');

});

require __DIR__.'/auth.php';