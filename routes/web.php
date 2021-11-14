<?php

use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\DogController;

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AccountController as AdminAccController;
use App\Http\Controllers\Admin\DogController as AdminDogController;
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

Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');

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

Route::get("/browse", [DogController::class, 'viewAll']);


// ****     Admin Panel     ****

// Accounts
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/accounts', [AdminAccController::class, 'viewAll'])->middleware('admin')->name('accounts.view.all');
Route::get('/admin/accounts/{accountId}', [AdminAccController::class, 'view'])
    ->middleware('admin')->where('accountId', '[0-9]+')->name('accounts.view');
Route::get('/admin/accounts/{accountId}/edit', [AdminAccController::class, 'edit'])
    ->middleware('admin')->where('accountId', '[0-9]+')->name('accounts.edit');
Route::put('/admin/accounts/{accountId}/edit', [AdminAccController::class, 'update'])
    ->middleware('admin')->where('accountId', '[0-9]+')->name('accounts.update');
Route::delete('/admin/accounts/{accountId}', [AdminAccController::class, 'destroy'])
    ->middleware('admin')->where('accountId', '[0-9]+')->name('accounts.delete');


// Dogs
Route::get('/admin/dogs', [AdminDogController::class, 'viewAll'])->middleware('admin')->name('dogs.view.all');
Route::get('/admin/dogs/{dogId}', [AdminDogController::class, 'view'])->middleware('admin')->where('dogId', '[0-9]+')->name('dogs.view');
Route::get('/admin/dogs/create', [AdminDogController::class, 'create'])->middleware('admin')->name('dogs.create');
Route::post('/admin/dogs/create', [AdminDogController::class, 'store'])->middleware('admin')->name('dogs.store');
Route::get('/admin/dogs/{dogId}/edit', [AdminDogController::class, 'edit'])->middleware('admin')->where('dogId', '[0-9]+')->name('dogs.edit');
Route::put('/admin/dogs/{dogId}/edit', [AdminDogController::class, 'update'])->middleware('admin')->where('dogId', '[0-9]+')->name('dogs.update');
Route::delete('/admin/dogs/{dogId}', [AdminDogController::class, 'destroy'])->middleware('admin')->where('dogId', '[0-9]+')->name('dogs.delete');

// Contacts 
Route::get('/admin/contacts', [ContactController::class, 'viewAll'])->middleware('admin')->name('contacts.view.all');
Route::get('/admin/contacts/{contactId}', [AdminDogController::class, 'view'])->middleware('admin')->where('contactId', '[0-9]+')->name('contacts.view');
Route::delete('/admin/contacts/{contactId}', [AdminDogController::class, 'destroy'])->middleware('admin')->where('contactId', '[0-9]+')->name('contacts.delete');
