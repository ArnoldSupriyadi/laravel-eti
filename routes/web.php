<?php

use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ClientController;
use App\Http\Controllers\Frontend\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::controller(HomeController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/signUp', 'signUp')->name('signUp');
    Route::post('/signIn', 'signIn')->name('signIn');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

Route::prefix('category')->group(function() {
    Route::get('', [ProductCategoryController::class, 'index'])->name('category.index');
    Route::post('create', [ProductCategoryController::class, 'create'])->name('category.create');
    Route::get('edit/{id}', [ProductCategoryController::class, 'edit'])->name('category.edit');
    Route::put('update/{id}', [ProductCategoryController::class, 'update'])->name('category.update');
});

Route::prefix('product')->group(function() {
    Route::get('', [ProductController::class, 'index'])->name('product.index');
    Route::post('create', [ProductController::class, 'create'])->name('product.create');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('update/{id}', [ProductController::class, 'update'])->name('product.update');
});

Route::group(['prefix' => 'backend'], function () {
    // Rute-rute yang akan diterapkan properti 'prefix' dan 'middleware' di sini

    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'createUser'])->name('user.create');
    Route::get('/user/edit', [UserController::class, 'editUser'])->name('user.edit');
});
