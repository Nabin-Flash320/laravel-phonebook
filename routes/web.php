<?php

use Illuminate\Support\Facades\Route;


// Application controllers
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhonebookController;
use App\Http\Controllers\RegisterController;

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

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/phonebook', [PhonebookController::class, 'index'])->name('phonebook');
Route::post('/phonebook', [PhonebookController::class, 'store'])->name('phonebook.get');
Route::get('/phonebook/list', [PhonebookController::class, 'list_all'])->name('phonebook.list');
Route::get('/phonebook/{id}/edit', [PhonebookController::class, 'edit'])->name('phonebook.edit');
Route::post('/phonebook/{id}/update', [PhonebookController::class, 'update'])->name('phonebook.update');
Route::get('/phonebook/{id}/delete', [PhonebookController::class, 'delete'])->name('phonebook.delete');
