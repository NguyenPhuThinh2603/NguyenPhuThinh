<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AccessoryController;
use App\Http\Controllers\frontend\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/san-pham', [ProductController::class, 'index'])->name('product');
Route::get('/phu-kien', [AccessoryController::class, 'index'])->name('accessory');
Route::get('/bai-viet', [PostController::class, 'index'])->name('post');
Route::get('/gioi-thieu', [AboutController::class, 'index'])->name('about');
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact');
Route::get('/chi-tiet-san-pham/{slug}', [ProductController::class, 'product_detail'])->name('product_detail'); 

