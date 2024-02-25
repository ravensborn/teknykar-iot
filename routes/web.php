<?php

use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class, 'home'])->name('home');
Route::get('/about',[PageController::class, 'about'])->name('about');
Route::get('/contact-us',[PageController::class, 'contactUs'])->name('contact-us');
Route::get('/privacy-and-policy',[PageController::class, 'privacyAndPolicy'])->name('privacy-and-policy');
Route::get('/terms-and-conditions',[PageController::class, 'termsAndConditions'])->name('terms-and-conditions');
