<?php

use Illuminate\Support\Facades\Route;

// Route::middleware(['auth'])->group serve para rotas que precisam de autenticação
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    }); 
});

