<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, "welcome"] );


// Rotta per /Chi_siamo
Route::get('/Chi_siamo', [FrontController::class, "chiSiamo"] );


// Rotta per /Servizi
Route::get('/Servizi', [FrontController::class, "Servizi"] );


// Rotta per Dove trovarci
Route::get('/Dove_trovarci', [FrontController::class, "doveTrovarci"] );
