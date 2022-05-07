<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\BsController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;

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

// 首頁
Route::get('/', [BsController::class, 'index']);
// Route::get('/', [Controller::class, 'index']);

Route::get('/detail', [BsController::class, 'detail']);

// 後台首頁
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','power'])->name('dashboard');

// 登入相關路由
require __DIR__.'/auth.php';

// 留言相關路由
Route::get('/comment', [Controller::class, 'comment']);
Route::get('/comment/save', [Controller::class, 'save_comment']);
Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/update/{id}', [Controller::class, 'update_comment']);
Route::get('/comment/delete/{id}', [Controller::class, 'delete_comment']);


// 購物車相關路由
Route::middleware(['auth'])->group(function(){
    Route::get('/shoppingS1', [ShoppingCartController::class, 'shoppingS1']);
    Route::post('/shoppingS2', [ShoppingCartController::class, 'shoppingS2']);
    Route::post('/shoppingS3', [ShoppingCartController::class, 'shoppingS3']);
    Route::get('/shoppingS4', [ShoppingCartController::class, 'shoppingS4']);
});



// 部分參考resful API 推薦的寫法
// BANNER管理相關路由
Route::prefix('banner')->middleware(['auth','power'])->group(function() { // Banner管理相關路由 群組化

    Route::get('/', [BannerController::class, 'index']);
    Route::get('/create', [BannerController::class, 'create']);
    Route::post('/store', [BannerController::class, 'store']);
    Route::get('/edit/{id}', [BannerController::class, 'edit']);
    Route::post('/update/{id}', [BannerController::class, 'update']);
    Route::delete('/delete/{id}', [BannerController::class, 'destory']);

});


// 商品管理相關路由
Route::prefix('product')->middleware(['auth','power'])->group(function() {

    Route::get('/', [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/update/{id}', [ProductController::class, 'update']);
    Route::delete('/delete/{id}', [ProductController::class, 'destory']);
    Route::delete('/delete_img/{img_id}', [ProductController::class, 'delete_img']); //刪除次要圖片id
});


// 商品詳情
Route::get('/detail/{id}', [BsController::class, 'detail']);

// 接受加入購物車請求
Route::post('/add_to_cart', [BsController::class, 'add_cart']);



Route::prefix('account')->middleware(['auth','power'])->group(function() {

    Route::get('/', [AccountController::class, 'index']);
    Route::get('/create', [AccountController::class, 'create']);
    Route::post('/store', [AccountController::class, 'store']);
    Route::get('/edit/{id}', [AccountController::class, 'edit']);
    Route::post('/update/{id}', [AccountController::class, 'update']);
    Route::delete('/delete/{id}', [AccountController::class, 'destory']);
});


Route::get('/order', [OrderController::class, 'index']);
Route::get('/order/edit/{id}', [OrderController::class, 'edit']);
Route::post('/order/update/{id}', [OrderController::class, 'update']);


// welcome相關路由
Route::get('/microsoft', [NewsController::class, 'micro']);
Route::get('/color', [NewsController::class, 'color']);
Route::get('/dice', [NewsController::class, 'dice']);

// Route::get('/index', [NewsController::class, 'bs']);


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

