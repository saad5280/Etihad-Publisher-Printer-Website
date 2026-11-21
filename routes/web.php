<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes - Etihad Publishers & Printers (اتحاد پبلشرز اینڈ پرنٹرز)
|--------------------------------------------------------------------------
*/

// Locale Switcher Route
Route::get('/lang/{locale}', function (string $locale): RedirectResponse {
    if (in_array($locale, ['en', 'ur'], true)) {
        Session::put('locale', $locale);
    }

    return redirect()->back();
})->name('lang.switch');

// Main Pages
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/publications', 'pages.publications')->name('publications');

// Combined Services & Machinery Page
Route::view('/services', 'pages.services')->name('services');
Route::redirect('/machinery', '/services#machinery')->name('machinery');

Route::view('/distribution', 'pages.distribution')->name('distribution');
Route::view('/rfq', 'pages.rfq')->name('rfq');
Route::view('/contact', 'pages.contact')->name('contact');
