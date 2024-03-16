<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/privacy-and-policy', [PageController::class, 'privacyAndPolicy'])->name('privacy-and-policy');
Route::get('/terms-and-conditions', [PageController::class, 'termsAndConditions'])->name('terms-and-conditions');


Route::get('/services/business-growth', [PageController::class, 'servicePage'])->name('services.business-growth');
Route::get('/services/sustainability', [PageController::class, 'servicePage'])->name('services.sustainability');
Route::get('/services/performance', [PageController::class, 'servicePage'])->name('services.performance');
Route::get('/services/advanced-analytics', [PageController::class, 'servicePage'])->name('services.advanced-analytics');
Route::get('/services/customer-insights', [PageController::class, 'servicePage'])->name('services.customer-insights');
Route::get('/services/organization', [PageController::class, 'servicePage'])->name('services.organization');

Route::post('/send-support-email', function () {

    $validated = \request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:10000'
    ]);

//    $email = 'sale@teknykar.com';
    $email = 'yad.hoshyar@gmail.com';

    Mail::send(new \App\Mail\SupportMail($email, $validated));

    $url = route('contact-us');

    return redirect()->to($url)->with(['success_message' => true]);

})->name('send-support-email');
