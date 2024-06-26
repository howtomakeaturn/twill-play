<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pages/{slug}', [\App\Http\Controllers\PageDisplayController::class, 'show'])->name('frontend.page');

Route::get('offices/{slug}', [\App\Http\Controllers\OfficeDisplayController::class, 'show'])->name('frontend.office');
