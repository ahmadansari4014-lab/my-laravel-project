<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

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

// Main Page Routes (Handled by PageController)
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::view('/real-estate-virtual-assistants', 'real-estate')->name('real-estate');
Route::get('/real-estate-virtual-assistants/{slug}', [App\Http\Controllers\RealEstateServiceController::class, 'show'])
    ->where('slug', '[a-z0-9-]+')
    ->name('real-estate.service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::post('/contact-send', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

Route::view('/privacy-policy', 'privacy')->name('privacy');
Route::view('/terms-of-service', 'terms')->name('terms');
Route::view('/sms-terms', 'sms-terms')->name('sms-terms');