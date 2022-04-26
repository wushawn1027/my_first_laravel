<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\BsController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
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

Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/update/{id}', [Controller::class, 'update_comment']);

Route::get('/comment/delete/{id}', [Controller::class, 'delete_comment']);

Route::get('/shoppingS1', [ShoppingCartController::class, 'shoppingS1']);
Route::get('/shoppingS2', [ShoppingCartController::class, 'shoppingS2']);
Route::get('/shoppingS3', [ShoppingCartController::class, 'shoppingS3']);
Route::get('/shoppingS4', [ShoppingCartController::class, 'shoppingS4']);

Route::get('/login', [Controller::class, 'login']);


// Banner 管理頁面 手工建立版本 (遵照resful API的規定)
// Route::get('/banner', [BannerController::class, 'index']);
// Route::post('/banner', [BannerController::class, 'store']);
// Route::get('/banner/create', [BannerController::class, 'create']);
// Route::get('/banner/{id}', [BannerController::class, 'show']); // 單筆檢視頁
// Route::post('/banner/{id}', [BannerController::class, 'edit']);
// Route::patch('/banner/{id}', [BannerController::class, 'update']);
// Route::delete('/banner/{id}', [BannerController::class, 'destory']);

// 以下一行抵七行

// Route::resource('banner', BannerController::class);

// 部分參考resful API 推薦的寫法

Route::prefix('banner')->group(function() { // Banner管理相關路由 群組化

    Route::get('/', [BannerController::class, 'index']);
    Route::get('/create', [BannerController::class, 'create']);
    Route::post('/store', [BannerController::class, 'store']);
    Route::get('/edit/{id}', [BannerController::class, 'edit']);
    Route::post('/update/{id}', [BannerController::class, 'update']);
    Route::post('/delete/{id}', [BannerController::class, 'destory']);

});



Route::prefix('product')->group(function() {

    Route::get('/', [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/update/{id}', [ProductController::class, 'update']);
    Route::post('/delete/{id}', [ProductController::class, 'destory']);

});



Route::get('/', [BsController::class, 'index']);









// Route::get('/microsoft', [NewsController::class, 'micro']);

// Route::get('/color', [NewsController::class, 'color']);

// Route::get('/dice', [NewsController::class, 'dice']);
