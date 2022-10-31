<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\Authentication;
use App\Http\Controllers\admin\Staff;

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

Route::get('/staff', [Staff::class, 'index'])->name('index.staff');
Route::get('/create', [Staff::class, 'create'])->name('create');
Route::post('/create', [Staff::class, 'store'])->name('create-new');
Route::get('/update/{id}', [Staff::class, 'edit'])->name('edit');
Route::post('/update/{id}', [Staff::class, 'update'])->name('update');
Route::get('/delete/{id}', [Staff::class, 'destroy'])->name('delete');
