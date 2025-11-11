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

    Route::get('/dashboard','App\Http\Controllers\admin\DashboardController@index')
    ->name('admin.dashboard');

    //cliente
    Route::post('/cliente/store','App\Http\Controllers\admin\ClienteController@store')
    ->name('admin.cliente.store');

    Route::get('/cliente/create','App\Http\Controllers\admin\ClienteController@create')
    ->name('admin.cliente.create');
});

Route::prefix('admin/ajuste')->middleware(['auth', 'verified'])->group(function () {
    //ajuste 
    Route::get('/','App\Http\Controllers\admin\ajuste\AjusteController@index')->name('admin.ajuste.ajuste.index');
     Route::get('/conta','App\Http\Controllers\admin\ajuste\AjusteController@index')->name('admin.ajuste.conta.index');
     Route::get('/logradouro','App\Http\Controllers\admin\ajuste\LogradouroController@index')->name('admin.ajuste.logradouro.index');    
});

Route::prefix('admin/ajuste/conta')->middleware(['auth', 'verified'])->group(function () {
    //contas
     Route::get('/tipo-conta','App\Http\Controllers\admin\ajuste\TipoContaController@index')->name('admin.ajuste.tipo-conta.index');

     Route::post('/tipo-conta/store','App\Http\Controllers\admin\ajuste\TipoContaController@store')->name('admin.ajuste.tipo-conta.store');
});



require __DIR__.'/auth.php';