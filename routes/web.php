<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DateTimeController; // Add this line
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home', function () {
        return view('home'); 
    })->name('home');

    Route::get('/step1', function () {
        return view('step1'); 
    })->name('step1');

    // New routes for date and time
    Route::get('/datetime', [DateTimeController::class, 'showDateTimePage'])->name('datetime');
    Route::post('/changeDateTime', [DateTimeController::class, 'changeDateTime'])->name('changeDateTime'); // Match the name here

});

require __DIR__.'/auth.php';
