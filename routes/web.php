<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [Controller::class, 'index']);

Route::get('/microsoft', [NewsController::class, 'index']);

Route::get('/color', [NewsController::class, 'color']);

Route::get('/bmi', [NewsController::class, 'bmi']);

Route::get('/dice', [NewsController::class, 'dice']);


