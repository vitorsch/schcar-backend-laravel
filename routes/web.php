<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DataScraping;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/thumb/{path}/{img}', [ImageController::class, 'thumb']);
//erro do GB Library extension é resolvido através do php.ini no XAMPP descomentando a linha
// da extensão do GB.
Route::post('/register', [AuthController::class, 'store']);

// Route::get('/olx/{id}', [DataScraping::class, 'index']);