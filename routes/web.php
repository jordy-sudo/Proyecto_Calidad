<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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
Route::get('/', [CartController::class, 'shop'])->name('shop');

Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');

Route::post('/add', [CartController::class, 'add'])->name('cart.store');

Route::post('/update', [CartController::class, 'update'])->name('cart.update');

Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/checkout', [CartController::class, 'index'])->name('checkout_view');
Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::get('/pedidos', [CartController::class, 'indexBuy'])->name('tobuy');
Route::get('/about', [CartController::class, 'indexAbout'])->name('about');


Route::get('/{locale}',function ($locale){
    session()->put('locale',$locale);
    return Redirect::back();
});
