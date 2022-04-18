<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BsController;
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

Route::get('/dice', [NewsController::class, 'dice']);


Route::get('/login', [Controller::class, 'login']);

Route::get('/bootstrap', [BsController::class, 'index']);

Route::get('/shoppingS1', [BsController::class, 'shoppingS1']);

Route::get('/shoppingS2', [BsController::class, 'shoppingS2']);

Route::get('/shoppingS3', [BsController::class, 'shoppingS3']);

Route::get('/shoppingS4', [BsController::class, 'shoppingS4']);
