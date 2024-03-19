<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\CompanyProfileController;
use App\Http\Controllers\Backend\CoreValueController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Frontend\LandingController;
use App\Http\Controllers\Frontend\SettingController;
use Illuminate\Support\Facades\Route;

// Frontend
Route::controller(LandingController::class)->group(function(){
    Route::get('/', 'index')->name('landing');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/products', 'products')->name('products');
    Route::get('/productsCategory', 'productsCategory')->name('productsCategory');
    Route::get('/productsCategory2', 'productsCategory2')->name('productsCategory2');
    Route::get('/productsDetail', 'detailProduct')->name('productsDetail');
    Route::get('/galleries', 'gallery')->name('gallery');
    Route::get('/contacts', 'contact')->name('contact');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/signIn', 'signIn')->name('signIn');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

// Auth
Route::middleware(['auth', 'auth.session'])->group(function () {

    Route::group(['prefix' => 'backend/about'], function () {
        Route::get('', [AboutController::class, 'index'])->name('about.index');
        Route::get('edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::get('editAboutImage/{id}', [AboutController::class, 'editAboutImage'])->name('about.editAboutImage');
        Route::get('editProductImage/{id}', [AboutController::class, 'editProductImage'])->name('about.editProductImage');
        Route::put('update/{id}', [AboutController::class, 'update'])->name('about.update');
        Route::put('updateAboutImage/{id}', [AboutController::class, 'updateAboutImage'])->name('about.updateAboutImage');
        Route::put('updateProductImage/{id}', [AboutController::class, 'updateProductImage'])->name('about.updateProductImage');
    });

    Route::group(['prefix' => 'backend/category'], function () {
        Route::get('', [ProductCategoryController::class, 'index'])->name('category.index');
        Route::get('create/{id}', [ProductCategoryController::class, 'create'])->name('category.create');
        Route::post('store', [ProductCategoryController::class, 'store'])->name('category.store');
        Route::get('edit/{id}', [ProductCategoryController::class, 'edit'])->name('category.edit');
        Route::get('editImage/{id}', [ProductCategoryController::class, 'editImage'])->name('category.editImage');
        Route::put('update/{id}', [ProductCategoryController::class, 'update'])->name('category.update');
        Route::put('updateImage/{id}', [ProductCategoryController::class, 'updateImage'])->name('category.updateImage');
        Route::delete('destroy/{id}', [ProductCategoryController::class, 'destroy'])->name('category.destroy');
    });

    // Client
    Route::group(['prefix' => 'backend/client'], function () {
        Route::get('create', [ClientController::class, 'create'])->name('client.create');
        Route::post('store', [ClientController::class, 'store'])->name('client.store');
        Route::get('edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
        Route::get('editLogo/{id}', [ClientController::class, 'editLogo'])->name('client.editLogo');
        Route::put('update/{id}', [ClientController::class, 'update'])->name('client.update');
        Route::put('updateLogo/{id}', [ClientController::class, 'updateLogo'])->name('client.updateLogo');
        Route::delete('destroy/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
    });

    // Company Profile
    Route::group(['prefix' => 'backend/compro'], function () {
        Route::get('', [CompanyProfileController::class, 'index'])->name('compro.index');
        Route::get('create', [CompanyProfileController::class, 'create'])->name('compro.create');
        Route::post('store', [CompanyProfileController::class, 'store'])->name('compro.store');
        Route::get('edit/{id}', [CompanyProfileController::class, 'edit'])->name('compro.edit');
        Route::put('update/{id}', [CompanyProfileController::class, 'update'])->name('compro.update');
        Route::delete('destroy/{id}', [CompanyProfileController::class, 'destroy'])->name('compro.destroy');
    });

    // Core Value
    Route::group(['prefix' => 'backend/coreValue'], function () {
        Route::post('create', [CoreValueController::class, 'create'])->name('coreValue.create');
        Route::get('edit/{id}', [CoreValueController::class, 'edit'])->name('coreValue.edit');
        Route::put('update/{id}', [CoreValueController::class, 'update'])->name('coreValue.update');
        Route::delete('destroy/{id}', [CoreValueController::class, 'destroy'])->name('coreValue.destroy');
    });

    Route::group(['prefix' => 'backend/product'], function () {
        Route::get('', [ProductController::class, 'index'])->name('product.index');
        Route::get('create', [ProductController::class, 'create'])->name('product.create');
        Route::post('store', [ProductController::class, 'store'])->name('product.store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::get('editImage/{id}', [ProductController::class, 'editImage'])->name('product.editImage');
        Route::put('update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::put('updateImage/{id}', [ProductController::class, 'updateImage'])->name('product.updateImage');
        Route::delete('destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    });

    Route::group(['prefix' => 'backend/role'], function () {
        Route::get('', [RoleController::class, 'index'])->name('role.index');
        Route::get('create', [RoleController::class, 'create'])->name('role.create');
        Route::post('store', [RoleController::class, 'store'])->name('role.store');
        Route::get('edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('update/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::delete('destroy/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
    });

    Route::group(['prefix' => 'backend/user'], function () {
        Route::get('', [UserController::class, 'index'])->name('user.index');
        Route::get('create', [UserController::class, 'create'])->name('user.create');
        Route::post('store', [UserController::class, 'store'])->name('user.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    });

    Route::group(['prefix' => 'backend'], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/home/edit', [HomeController::class, 'edit'])->name('home.edit');
    });

    Route::group(['prefix' => 'backend'], function () {
        Route::get('/logo', [LogoController::class, 'index'])->name('logo.index');
        Route::get('/logo/edit/{id}', [LogoController::class, 'edit'])->name('logo.edit');
        Route::put('/logo/update/{id}', [LogoController::class, 'update'])->name('logo.update');
    });

    Route::group(['prefix' => 'backend'], function () {
        Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
        Route::put('/contact/update/{id}', [ContactController::class, 'update'])->name('contact.update');
    });

    Route::group(['prefix' => 'backend'], function () {
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
        Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
        Route::get('/gallery/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    });

});

