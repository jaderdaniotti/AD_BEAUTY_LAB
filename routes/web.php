<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'homepage'])->name('homepageRoute');
Route::get('/contacts', [SiteController::class, 'contacts'])->name('contactsRoute');
Route::get('/treatments', [SiteController::class, 'treatments'])->name('treatmentsRoute');
