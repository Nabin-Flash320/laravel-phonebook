<?php

use Illuminate\Support\Facades\Route;


// Application controllers
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhonebookController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\profileSettingController;
use Symfony\Component\HttpKernel\Profiler\Profiler;

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

//Home route
Route::get('/phonebook', [PhonebookController::class, 'index'])->name('phonebook');

// For user login system routes
Route::get('/phonebook/login', [LoginController::class, 'index'])->name('phonebook.login');
Route::post('/phonebook/login', [LoginController::class, 'login'])->name('phonebook.login');

//Logout 
Route::post('phonebook/logout', [LoginController::class, 'logout'])->name('phonebook.logout')->middleware('auth');

// For user registration system routes
Route::get('/phonebook/register', [RegisterController::class, 'index'])->name('phonebook.register');
Route::post('/phonebook/register', [RegisterController::class, 'register'])->name('phonebook.register');
Route::get('/phonebook/verify',  [RegisterController::class,  'verify_registered_email'])->name('phonebook.verify.register');

//Saving operation routes
Route::get('/phonebook/save', [PhonebookController::class, 'save'])->name('phonebook.save')->middleware('auth');
Route::post('/phonebook/store', [PhonebookController::class, 'store'])->name('phonebook.store')->middleware('auth');

//Listing,editing, updating and deleting operation routes
Route::get('/phonebook/list', [PhonebookController::class, 'list_all'])->name('phonebook.list');
Route::get('/phonebook/{id}/edit', [PhonebookController::class, 'edit'])->name('phonebook.edit')->middleware('auth');
Route::post('/phonebook/{id}/update', [PhonebookController::class, 'update'])->name('phonebook.update')->middleware('auth');
Route::get('/phonebook/{id}/delete', [PhonebookController::class, 'delete'])->name('phonebook.delete')->middleware('auth');

//User profile and profile setting route
Route::get('/phonebook/profile', [ProfileController::class, 'profile'])->name('phonebook.user.profile')->middleware('auth');
//=>Change profile picture
Route::get('/phonebook/{id}/changeprofilepicture', [profileSettingController::class, 'change_profile_picture'])->name('phonebook.user.profile.picture')->middleware(['auth', 'verified']);
Route::post('/phonebook/{id}/changeprofilepicture', [profileSettingController::class, 'update_profile_picture'])->name('phonebook.user.profile.picture')->middleware('auth', 'verified');
//=>Change username
Route::get('/phonebook/{id}/changeusername', [profileSettingController::class, 'change_user_name'])->name('phonebook.user.profile.username')->middleware('auth', 'verified');
Route::post('/phonebook/{id}/changeusername', [profileSettingController::class, 'update_username'])->name('phonebook.user.profile.username')->middleware('auth', 'verified');
//=>Change email
Route::get('/phonebook/{id}/changeuseremail', [profileSettingController::class, 'change_email'])->name('phonebook.user.profile.email')->middleware('auth', 'verified');
Route::post('/phonebook/{id}/changeuseremail', [profileSettingController::class, 'update_email'])->name('phonebook.user.profile.email')->middleware('auth', 'verified');
//=>Change password
Route::get('/phonebook/{id}/changeuserpassword', [profileSettingController::class, 'change_password'])->name('phonebook.user.profile.password')->middleware(['auth', 'verified']);
Route::post('/phonebook/{id}/changeuserpassword', [profileSettingController::class, 'update_password'])->name('phonebook.user.profile.password')->middleware(['auth', 'verified']);


