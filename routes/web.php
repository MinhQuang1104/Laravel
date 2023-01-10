<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\Authentication;
use App\Http\Controllers\admin\Staff;
use App\Http\Controllers\admin\Product;
use App\Http\Controllers\admin\Category;
use App\Http\Controllers\admin\Discount_type;
use App\Http\Controllers\admin\Wish_list;
use App\Http\Controllers\admin\Size;
use App\Http\Controllers\admin\Color;
use App\Http\Controllers\admin\Tag;

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

// Router Staff
Route::group(['prefix' => 'staff'], function () {
    Route::get('/', [Staff::class, 'index'])->name('index.staff');
    Route::get('/create', [Staff::class, 'create'])->name('create.staff');
    Route::post('/create', [Staff::class, 'store'])->name('create-new.staff');
    Route::get('/update/{id}', [Staff::class, 'edit'])->name('edit.staff');
    Route::post('/update/{id}', [Staff::class, 'update'])->name('update.staff');
    Route::get('/delete/{id}', [Staff::class, 'destroy'])->name('delete.staff');
});

// Router Product
Route::group(['prefix' => 'product'], function () {
    Route::get('/', [Product::class, 'index'])->name('index.product');
    Route::get('/create', [Product::class, 'create'])->name('create.product');
    Route::post('/create', [Product::class, 'store'])->name('create-new.product');
    Route::get('/update/{id}', [Product::class, 'edit'])->name('edit.product');
    Route::post('/update/{id}', [Product::class, 'update'])->name('update.product');
    Route::get('/delete/{id}', [Product::class, 'destroy'])->name('delete.product');

    Route::get('/product-image/delete/{image_id}', [Product::class, 'destroyImage'])->name('delete.productImage');
    Route::get('/view/{id}', [Product::class, 'view'])->name('view.product');
    Route::get('/view-ajax/{id}', [Product::class, 'viewAjax'])->name('view-ajax.product');
    Route::get('/add-wishlist/{id}', [Product::class, 'addWishList'])->name('addWishList.product');
});

// Router Category
Route::group(['prefix' => 'category'], function () {
    Route::get('/', [Category::class, 'index'])->name('index.category');
    Route::get('/create', [Category::class, 'create'])->name('create.category');
    Route::post('/create', [Category::class, 'store'])->name('create-new.category');
    Route::get('/update/{id}', [Category::class, 'edit'])->name('edit.category');
    Route::post('/update/{id}', [Category::class, 'update'])->name('update.category');
    Route::get('/delete/{id}', [Category::class, 'destroy'])->name('delete.category');
});

// Router Discount Type
Route::group(['prefix' => 'discount-type'], function () {
    Route::get('/', [Discount_type::class, 'index'])->name('index.discount-type');
    Route::get('/create', [Discount_type::class, 'create'])->name('create.discount-type');
    Route::post('/create', [Discount_type::class, 'store'])->name('create-new.discount-type');
    Route::get('/update/{id}', [Discount_type::class, 'edit'])->name('edit.discount-type');
    Route::post('/update/{id}', [Discount_type::class, 'update'])->name('update.discount-type');
    Route::get('/delete/{id}', [Discount_type::class, 'destroy'])->name('delete.discount-type');
});

// Router Wish List
Route::group(['prefix' => 'wish-list'], function () {
    Route::get('/', [Wish_list::class, 'index'])->name('index.wish-list');
    Route::get('/create', [Wish_list::class, 'create'])->name('create.wish-list');
    Route::post('/create', [Wish_list::class, 'store'])->name('create-new.wish-list');
    Route::get('/update/{id}', [Wish_list::class, 'edit'])->name('edit.wish-list');
    Route::post('/update/{id}', [Wish_list::class, 'update'])->name('update.wish-list');
    Route::get('/delete/{id}', [Wish_list::class, 'destroy'])->name('delete.wish-list');
});

// Router Size
Route::group(['prefix' => 'size'], function () {
    Route::get('/', [Size::class, 'index'])->name('index.size');
    Route::get('/create', [Size::class, 'create'])->name('create.size');
    Route::post('/create', [Size::class, 'store'])->name('create-new.size');
    Route::get('/update/{id}', [Size::class, 'edit'])->name('edit.size');
    Route::post('/update/{id}', [Size::class, 'update'])->name('update.size');
    Route::get('/delete/{id}', [Size::class, 'destroy'])->name('delete.size');
});

// Router Color
Route::group(['prefix' => 'color'], function () {
    Route::get('/', [Color::class, 'index'])->name('index.color');
    Route::get('/create', [Color::class, 'create'])->name('create.color');
    Route::post('/create', [Color::class, 'store'])->name('create-new.color');
    Route::get('/update/{id}', [Color::class, 'edit'])->name('edit.color');
    Route::post('/update/{id}', [Color::class, 'update'])->name('update.color');
    Route::get('/delete/{id}', [Color::class, 'destroy'])->name('delete.color');
});

// Router Tag
Route::group(['prefix' => 'tag'], function () {
    Route::get('/', [Tag::class, 'index'])->name('index.tag');
    Route::get('/create', [Tag::class, 'create'])->name('create.tag');
    Route::post('/create', [Tag::class, 'store'])->name('create-new.tag');
    Route::get('/update/{id}', [Tag::class, 'edit'])->name('edit.tag');
    Route::post('/update/{id}', [Tag::class, 'update'])->name('update.tag');
    Route::get('/delete/{id}', [Tag::class, 'destroy'])->name('delete.tag');
});
