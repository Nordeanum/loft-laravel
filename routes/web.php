<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/catalog/{category}', [CategoryController::class, 'index']);
Route::get('/catalog/{category}/{game}', [GameController::class, 'index']);




Route::get('/news', function () {
    return view('shop/news');
});
Route::get('/news/{post}', [HomeController::class, 'pageSingleNew']);

Route::get('/about', function () {
    return view('shop/about');
});

Route::get('/product', function () {
    return view('shop/1product');
});

Route::get('/cart1', function () {
    return view('shop/cart1');
});

Route::get('/cart2', function () {
    return view('shop/cart2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
