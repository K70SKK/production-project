<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DateTimeController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Step1Controller;
use App\Http\Controllers\Step2Controller;

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

    Route::get('/test', function () {
        return view('test'); 
    })->name('test');

    Route::get('/step1', function () {
        return view('step1'); 
    })->name('step1');

    Route::get('/step2', function () {
        return view('step2'); 
    })->name('step2');

    Route::get('/step3', function () {
        return view('step3'); 
    })->name('step3');

    Route::get('/step4', function () {
        return view('step4'); 
    })->name('step4');


    Route::get('/howlook', function () {
        return view('howlook'); 
    })->name('howlook');
    
    
    Route::get('/datetime', [DateTimeController::class, 'showDateTimePage'])->name('datetime');
    Route::post('/changeDateTime', [DateTimeController::class, 'changeDateTime'])->name('changeDateTime'); 

    Route::post('/step1/store', [Step1Controller::class, 'store'])->name('step1.store');
    Route::post('/step2/store', [Step2Controller::class, 'store'])->name('step2.store');

});

require __DIR__.'/auth.php';
