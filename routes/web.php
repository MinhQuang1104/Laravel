<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\Authentication;
use App\Http\Controllers\admin\Staff;
use App\Http\Controllers\admin\Product;

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

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

Route::get('/', [Authentication::class, 'home'])->name('home');
Route::get('/login', [Authentication::class, 'index'])->name('login');
Route::post('/user-login', [Authentication::class, 'userLogin'])->name('user.login');

Route::group(['prefix' => 'staff'], function() {
    Route::get('/', [Staff::class, 'index'])->name('index.staff');
    Route::get('/create', [Staff::class, 'create'])->name('create.staff');
    Route::post('/create', [Staff::class, 'store'])->name('create-new.staff');
    Route::get('/update/{id}', [Staff::class, 'edit'])->name('edit.staff');
    Route::post('/update/{id}', [Staff::class, 'update'])->name('update.staff');
    Route::get('/delete/{id}', [Staff::class, 'destroy'])->name('delete.staff');
});

Route::group(['prefix' => 'product'], function() {
    Route::get('/', [Product::class, 'index'])->name('index.product');
    Route::get('/create', [Product::class, 'create'])->name('create.product');
    Route::post('/create', [Product::class, 'store'])->name('create-new.product');
    Route::get('/update/{id}', [Product::class, 'edit'])->name('edit.product');
    Route::post('/update/{id}', [Product::class, 'update'])->name('update.product');
    Route::get('/delete/{id}', [Product::class, 'destroy'])->name('delete.product');
});

