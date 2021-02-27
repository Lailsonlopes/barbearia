<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\LojaController;

Route::get('/', [LojaController::class, 'inicio']);
Route::get('/home', [LojaController::class, 'home']);
Route::get('/produtos', [LojaController::class, 'produtos']);
Route::get('/sobre', [LojaController::class, 'sobre']);


