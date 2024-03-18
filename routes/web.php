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

Route::get('/iot-platform/teknykar-lns', [PageController::class, 'iotPlatformPage'])->name('iot-platform.teknykar-lns');
Route::get('/iot-platform/teknykar-platform', [PageController::class, 'iotPlatformPage'])->name('iot-platform.teknykar-platform');

Route::get('/services/connection', [PageController::class, 'servicesPage'])->name('services.connection');
Route::get('/services/lns', [PageController::class, 'servicesPage'])->name('services.lns');
Route::get('/services/mobile-application', [PageController::class, 'servicesPage'])->name('services.mobile-application');
Route::get('/services/web-application', [PageController::class, 'servicesPage'])->name('services.web-application');
Route::get('/services/iot-sensors', [PageController::class, 'servicesPage'])->name('services.iot-sensors');
Route::get('/services/iot-development', [PageController::class, 'servicesPage'])->name('services.iot-development');


Route::get('/differences/business-growth', [PageController::class, 'differencesPage'])->name('differences.business-growth');
Route::get('/differences/sustainability', [PageController::class, 'differencesPage'])->name('differences.sustainability');
Route::get('/differences/performance', [PageController::class, 'differencesPage'])->name('differences.performance');
Route::get('/differences/advanced-analytics', [PageController::class, 'differencesPage'])->name('differences.advanced-analytics');
Route::get('/differences/customer-insights', [PageController::class, 'differencesPage'])->name('differences.customer-insights');
Route::get('/differences/organization', [PageController::class, 'differencesPage'])->name('differences.organization');

Route::post('/send-support-email', function () {

    $validated = \request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:10000'
    ]);

    $email = 'sales@teknykar.com';
//    $email = 'yad.hoshyar@gmail.com';

    Mail::send(new \App\Mail\SupportMail($email, $validated));

    $url = route('contact-us');

    return redirect()->to($url)->with(['success_message' => true]);

})->name('send-support-email');
