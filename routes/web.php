<?php

use App\Http\Controllers\Backend\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'backend'], function () {
    // Rute-rute yang akan diterapkan properti 'prefix' dan 'middleware' di sini

    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::get('/dashboard',[UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'createUser'])->name('user.create');
    Route::get('/user/edit', [UserController::class, 'editUser'])->name('user.edit');
});