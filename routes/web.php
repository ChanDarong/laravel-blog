<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('frontend.page.home');
});

Route::get('/detail', function () {
    return view('frontend.page.detail');
})->name('detail');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
