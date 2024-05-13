<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('home');
// });
// route::[method]('/url',[controllername::class, 'name of class']);
Route::get('/', [HomeController::class,'index'])->name('home');

Route::post('/add_product',[HomeController::class, 'add_product']);
Route::get('/show_product',[HomeController::class, 'show_product'])->name('all_product');
Route::get('/delete_product/{id?}', [HomeController::class, 'delete_product']);
Route::get('/update_product/{id?}', [HomeController::class, 'update_product'])->name('update');