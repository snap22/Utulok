<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AccountController as AdminAccController;

use Illuminate\Support\Facades\Route;

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
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/register', [AccountController::class, 'create'])->middleware('guest');
Route::post('/register', [AccountController::class, 'store'])->middleware('guest');
Route::get('/login', [AccountController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AccountController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AccountController::class, 'logout'])->middleware('auth');

Route::get('/confirm-password',[AccountController::class, 'confirmPassword'] )->middleware('auth')->name('password.confirm');
Route::post('/confirm-password',[AccountController::class, 'validatePassword'] )->middleware('auth')->name('password.confirm');

Route::get('/profile', [AccountController::class, 'inspect'])->middleware('auth');
Route::get('/profile/edit', [AccountController::class, 'edit'])->middleware('auth');
Route::put('/profile/edit', [AccountController::class, 'update'])->middleware('auth');
Route::delete('/profile', [AccountController::class, 'destroy'])->middleware('auth')->middleware(['password.confirm']);

Route::get('/profile/edit/password', [AccountController::class, 'changePassword'])->middleware('auth');
Route::post('/profile/edit/password', [AccountController::class, 'updatePassword'])->middleware('auth');




// ****     Admin Panel     ****

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/users', [AdminAccController::class, 'viewAll'])->middleware('admin');
Route::get('/admin/users/{accountId}', [AdminAccController::class, 'view'])->middleware('admin')->where('accountId', '[0-9]+');

