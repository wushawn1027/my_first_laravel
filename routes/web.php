<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShoppingCartController;
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

Route::get('/comment', [Controller::class, 'comment']);
Route::get('/comment/save', [Controller::class, 'save_comment']);

Route::get('/index', [ShoppingCartController::class, 'index']);

Route::get('/shoppingS1', [ShoppingCartController::class, 'shoppingS1']);

Route::get('/shoppingS2', [ShoppingCartController::class, 'shoppingS2']);

Route::get('/shoppingS3', [ShoppingCartController::class, 'shoppingS3']);

Route::get('/shoppingS4', [ShoppingCartController::class, 'shoppingS4']);

Route::get('/login', [Controller::class, 'login']);



Route::get('/microsoft', [NewsController::class, 'micro']);

Route::get('/color', [NewsController::class, 'color']);

Route::get('/dice', [NewsController::class, 'dice']);
