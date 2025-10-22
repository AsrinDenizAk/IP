<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/hakkimizda', [PageController::class, 'hakkimizda']);
Route::get('/bolumlerimiz', [PageController::class, 'bolumlerimiz']);
Route::get('/bize-ulasin', [ContactController::class, 'index']);
Route::post('/bize-ulasin', [ContactController::class, 'store']);

Route::get('/haberler', [NewsController::class, 'index']);
/*
Route::get('/basvuru', [HRController::class, 'index']);
Route::post('/basvuru', [HRController::class, 'store']);
*/
