<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/our-companies', [SiteController::class, 'ourCompanies'])->name('site.our-companies');
Route::get('/our-companies/{slug}', [SiteController::class, 'company'])->name('site.company');

Route::get('/about', [SiteController::class, 'about'])->name('site.about');
Route::get('/team', [SiteController::class, 'team'])->name('site.team');
Route::get('/careers', [SiteController::class, 'careers'])->name('site.careers');

Route::get('/blogs', [SiteController::class, 'blogs'])->name('site.blogs');
Route::get('/events/{slug}', [SiteController::class, 'eventGallery'])->name('site.event');

Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::post('/contact', [SiteController::class, 'contactSubmit'])->name('site.contact.submit');

// If you need a traditional app login page later (Breeze, Jetstream, etc.),
// you can define it here. For now, use the Filament panel at /admin.
