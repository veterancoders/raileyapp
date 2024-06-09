<?php

use App\Http\Controllers\ContactController;
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
/* RETURN HOME */
Route::get('/', function () {
    return view('home');
})->name('home');

/* EMAIL SUCCESS PAGE */
Route::get('/successful', function () {
    return view('success');
})->name('success');

/* CONTACT CONTROLLER */
Route::post('/contact', [ContactController::class, 'submit'])->name('formsubmit');
