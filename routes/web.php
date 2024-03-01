<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Frontend\ClientController;
use App\Http\Controllers\Frontend\LandingController;
use App\Http\Controllers\Frontend\SettingController;
use Illuminate\Support\Facades\Route;

// Frontend
Route::controller(LandingController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/signIn', 'signIn')->name('signIn');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

// Auth
Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::prefix('category')->group(function() {
        Route::get('', [ProductCategoryController::class, 'index'])->name('category.index');
        Route::post('create', [ProductCategoryController::class, 'create'])->name('category.create');
        Route::get('edit/{id}', [ProductCategoryController::class, 'edit'])->name('category.edit');
        Route::put('update/{id}', [ProductCategoryController::class, 'update'])->name('category.update');
    });

    Route::prefix('product')->group(function() {
        Route::get('', [ProductController::class, 'index'])->name('product.index');
        Route::get('create', [ProductController::class, 'create'])->name('product.create');
        Route::get('edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('update/{id}', [ProductController::class, 'update'])->name('product.update');
    });

    Route::prefix('role')->group(function() {
        Route::get('', [RoleController::class, 'index'])->name('role.index');
        Route::get('create', [RoleController::class, 'create'])->name('role.create');
        Route::post('store', [RoleController::class, 'store'])->name('role.store');
        Route::get('edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('update/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::delete('destroy/{id}', [RoleController::class, 'destroy'])->name('penjualan.destroy');
    });

    Route::prefix('user')->group(function() {
        Route::get('', [UserController::class, 'index'])->name('user.index');
        Route::get('create', [UserController::class, 'create'])->name('user.create');
        Route::post('store', [UserController::class, 'store'])->name('user.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('destroy/{id}', [RoleController::class, 'destroy'])->name('penjualan.destroy');
    });

    // Route::group(['prefix' => 'backend'], function () {
    //     // Rute-rute yang akan diterapkan properti 'prefix' dan 'middleware' di sini

    //     Route::get('/user', [UserController::class, 'index'])->name('user.index');
    //     Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    //     Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    // });

    Route::group(['prefix' => 'backend'], function () {
        Route::get('/logo', [LogoController::class, 'index'])->name('logo.index');
        Route::get('/logo/edit', [LogoController::class, 'edit'])->name('logo.edit');
    });

    Route::group(['prefix' => 'backend'], function () {
        Route::get('/about', [AboutController::class, 'index'])->name('about.index');
        Route::get('/about/edit', [AboutController::class, 'edit'])->name('about.edit');
    });

    Route::group(['prefix' => 'backend'], function () {
        Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::get('/contact/edit', [ContactController::class, 'edit'])->name('contact.edit');
    });

    Route::group(['prefix' => 'backend'], function () {
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
        Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
        Route::get('/gallery/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    });

    // Route::group(['prefix' => 'backend'], function () {
    //     Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    //     Route::get('/home/edit', [HomeController::class, 'edit'])->name('home.edit');
    // });

});

