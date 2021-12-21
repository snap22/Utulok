<?php

use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\DogController;
use App\Http\Controllers\User\AdressController;
use App\Http\Controllers\User\AdoptionController;

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\BreedController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdoptionController as AdminAdoptionController;
use App\Http\Controllers\Admin\AccountController as AdminAccController;
use App\Http\Controllers\Admin\DogController as AdminDogController;


use App\Http\Controllers\AjaxController;
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

Route::get('/profile', [AccountController::class, 'inspect'])->middleware('auth')->name('profile.view');
Route::get('/profile/edit', [AccountController::class, 'edit'])->middleware('auth');
Route::put('/profile/edit', [AccountController::class, 'update'])->middleware('auth');
Route::delete('/profile', [AccountController::class, 'destroy'])->middleware('auth')->middleware(['password.confirm']);

Route::get('/profile/edit/password', [AccountController::class, 'changePassword'])->middleware('auth');
Route::post('/profile/edit/password', [AccountController::class, 'updatePassword'])->middleware('auth');

Route::get("/profile/address", [AdressController::class, 'create'])->middleware('auth')->name('address.create');
Route::post("/profile/address", [AdressController::class, 'store'])->middleware('auth')->name('address.store');
Route::delete("/profile/address", [AdressController::class, 'destroy'])->middleware('auth')->name('address.destroy');
Route::get("/profile/address/edit", [AdressController::class, 'edit'])->middleware('auth')->name('address.edit');
Route::put("/profile/address/edit", [AdressController::class, 'update'])->middleware('auth')->name('address.update');


Route::get("/browse", [DogController::class, 'viewAll'])->name('public.dogs.view.all');
Route::get("/browse/dog/{dogId}", [DogController::class, 'view'])->where('accountId', '[0-9]+')->name('public.dogs.view');

Route::post('/browse/dog/adopt', [AdoptionController::class, 'store'])->middleware('auth')->where('adoptionId', '[0-9]+')->name('public.adoptions.store');
Route::delete('/browse/dog/adopt/{adoptionId}', [AdoptionController::class, 'cancel'])->middleware('admin')->where('adoptionId', '[0-9]+')->name('public.adoptions.delete');


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

// Breeds
Route::get('/admin/breeds', [BreedController::class, 'viewAll'])->middleware('admin')->name('breeds.view.all');
Route::get('/admin/breeds/create', [BreedController::class, 'create'])->middleware('admin')->name('breeds.create');
Route::post('/admin/breeds/create', [BreedController::class, 'store'])->middleware('admin')->name('breeds.store');
Route::delete('/admin/breeds/{breedId}', [BreedController::class, 'destroy'])->middleware('admin')->where('breedId', '[0-9]+')->name('breeds.delete');

// Contacts 
Route::get('/admin/contacts', [ContactController::class, 'viewAll'])->middleware('admin')->name('contacts.view.all');
Route::get('/admin/contacts/{contactId}', [ContactController::class, 'view'])->middleware('admin')->where('contactId', '[0-9]+')->name('contacts.view');
Route::delete('/admin/contacts/{contactId}', [ContactController::class, 'destroy'])->middleware('admin')->where('contactId', '[0-9]+')->name('contacts.delete');
Route::get('/admin/contacts/{contactId}/solve', [ContactController::class, 'solve'])->middleware('admin')->where('contactId', '[0-9]+')->name('contacts.solve');

// Adoptions

Route::get('/admins/adoptions', [AdminAdoptionController::class, 'viewAll'])->middleware('admin')->name('adoptions.view.all');
Route::get('/admins/adoptions/{adoptionId}', [AdminAdoptionController::class, 'view'])->middleware('admin')->where('adoptionId', '[0-9]+')->name('adoptions.view');
Route::delete('/admins/adoptions/{adoptionId}', [AdminAdoptionController::class, 'destroy'])->middleware('admin')->where('adoptionId', '[0-9]+')->name('adoptions.delete');