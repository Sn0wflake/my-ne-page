<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;


Route::middleware([\App\Http\Middleware\SetLocale::class])->group(function () {
    Route::get('/', [HomeController::class, 'index'])
        ->name('home');

    Route::get('/jobs', [JobController::class, 'index'])
        ->name('jobs');

    Route::get('/contact', [ContactController::class, 'index'])
        ->name('contact');

    Route::post('/contact', [ContactController::class, 'store'])
        ->name('contact.store');
});

Route::post('/language/switch', [LanguageController::class, 'switch'])
    ->name('language.switch');


