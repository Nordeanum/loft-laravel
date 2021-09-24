<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

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

//Catalog routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalog/{category}', [CategoryController::class, 'index'])->name('catalog.category');
Route::get('/catalog/{category}/{game}', [GameController::class, 'index'])->name('catalog.category.game');

// Categories
Route::get('/category/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

Route::post('category/add', [CategoryController::class, 'add'])->name('categories.add');
Route::post('category/save/{id}', [CategoryController::class, 'save'])->name('categories.save');

// Games
Route::get('/game/create', [GameController::class, 'create'])->name('games.create');
Route::get('/game/edit/{id}', [GameController::class, 'edit'])->name('games.edit');
Route::get('/game/delete/{id}', [GameController::class, 'delete'])->name('games.delete');

Route::post('/game/add', [GameController::class, 'add'])->name('games.add');
Route::post('/game/save/{id}', [GameController::class, 'save'])->name('games.save');

// Orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/orders/create/{id}', [OrderController::class, 'create'])->name('orders.create');
Route::get('/orders/success', [OrderController::class, 'success'])->name('orders.success');

Route::post('/orders/add', [OrderController::class, 'add'])->name('orders.add');

// Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::post('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');


// Static pages
Route::view('/news', 'shop/news');
Route::view('/news/post', 'shop/1news');
Route::view('/about', 'shop/about');
Route::view('/cart1', 'shop/cart1');
Route::view('/cart2', 'shop/cart2');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
