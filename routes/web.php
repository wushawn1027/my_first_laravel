<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

Route::get('/microsoft', [Controller::class, 'microsoft']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return view('welcome');
// });

// Route::get('/say', function () {
//     return 'Hello world!';
// });

// Route::get('/microsoft', function () {
//     return view('RWD');
// });

// Route::get('/weather', function () {
//     return view('weather-1');
// });

// Route::get('/bmi', function () {
//     return view('js-BMI');
// });

// Route::get('/骰子', function () {
//     return view('js-擲骰子');
// });
