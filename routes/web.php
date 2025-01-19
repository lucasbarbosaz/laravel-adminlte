<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth'])->group serve para rotas que precisam de autenticação

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create' , [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}/update', [ UserController::class, 'update' ])->name('users.update');
    Route::put('/users/{user}/update/profile', [ UserController::class, 'updateProfile' ])->name('users.updateProfile');
    Route::put('/users/{user}/update/interests', [ UserController::class, 'updateInterests' ])->name('users.updateInterests');
    Route::put('/users/{user}/update/roles', [ UserController::class, 'updateRoles' ])->name('users.updateRoles');
    Route::delete('/users/{user}/destroy', [ UserController::class, 'destroy' ])->name('users.destroy');
});

