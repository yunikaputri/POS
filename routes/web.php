<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

//Product
use App\Http\Controllers\ProductController;

Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage'])->name('category.food_beverage');
    Route::get('beauty-health', [ProductController::class, 'beautyHealth'])->name('category.beauty_health');
    Route::get('home-care', [ProductController::class, 'homeCare'])->name('category.home_care');
    Route::get('baby-kid', [ProductController::class, 'babyKid'])->name('category.baby_kid');
});

//User
use App\Http\Controllers\UserController;

Route::get('/user/{id}/name/{nama}', [UserController::class, 'index'])->name('user');

//Sales
use App\Http\Controllers\SalesController;

Route::get('sales', [SalesController::class, 'index'])->name('sales');

