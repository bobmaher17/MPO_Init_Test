<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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

// DEFAULT ROUTE
// Route::get('/', function () {
//     return view('welcome');
// });

// CUSTOM ROUTE
Route::get('/', function () {
    return view('home');
});

Route::get('/task_one', function () {
    return view('task_one');
});
Route::get('task_one/order_list', [productController::class, 'getData'])->name('orders.list');

Route::get('/task_two', function () {
    return view('task_two');
});
