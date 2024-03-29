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

    Route::get('/step5', function () {
        return view('step5'); 
    })->name('step5');

    Route::get('/step6', function () {
        return view('step6'); 
    })->name('step6');

    Route::get('/step7', function () {
        return view('step7'); 
    })->name('step7');

    Route::get('/howlook', function () {
        return view('howlook'); 
    })->name('howlook');

    Route::get('/livedead', function () {
        return view('livedead'); 
    })->name('livedead');

    Route::get('/chain', function () {
        return view('chain'); 
    })->name('chain');    

    Route::get('/end', function () {
        return view('end'); 
    })->name('end');    

    Route::get('/list', function () {
        return view('list'); 
    })->name('list'); 

    Route::get('/c', function () {
        return view('c'); 
    })->name('c');

    Route::get('/1step', function () {
        return view('1step'); 
    })->name('1step');

    Route::get('/2step', function () {
        return view('2step'); 
    })->name('2step');

    Route::get('/3step3', function () {
        return view('3step'); 
    })->name('3step');

    Route::get('/4step', function () {
        return view('4step'); 
    })->name('4step');

    Route::get('/5step', function () {
        return view('5step'); 
    })->name('5step');

    Route::get('/6step', function () {
        return view('6step'); 
    })->name('6step');

    Route::get('/7step7', function () {
        return view('7step'); 
    })->name('7step');

    Route::get('/ihowlook', function () {
        return view('ihowlook'); 
    })->name('ihowlook');

    Route::get('/ilivedead', function () {
        return view('ilivedead'); 
    })->name('ilivedead');

    Route::get('/ichain', function () {
        return view('ichain'); 
    })->name('ichain');  

    Route::get('/help', function () {
        return view('help'); 
    })->name('help'); 
    
    Route::get('/datetime', [DateTimeController::class, 'showDateTimePage'])->name('datetime');
    Route::post('/changeDateTime', [DateTimeController::class, 'changeDateTime'])->name('changeDateTime'); 

    Route::post('/step1/store', [Step1Controller::class, 'store'])->name('step1.store');
    Route::post('/step2/store', [Step2Controller::class, 'store'])->name('step2.store');
    

    Route::get('/step2/create/{step1Id}', [Step2Controller::class, 'create'])->name('step2.create');
    Route::get('/step3/{step1Id}', [Step2Controller::class, 'step3'])->name('step3');
    Route::get('/step4/{step1Id}', [Step2Controller::class, 'step4'])->name('step4');
    Route::get('/step5/{step1Id}', [Step2Controller::class, 'step5'])->name('step5');
    Route::get('/step6/{step1Id}', [Step2Controller::class, 'step6'])->name('step6');
    Route::get('/step7/{step1Id}', [Step2Controller::class, 'step7'])->name('step7');

    
   
    Route::get('/c', [Step1Controller::class, 'index'])->name('c');
    Route::get('/cs/{case_number}', [App\Http\Controllers\CsController::class, 'show'])->name('cs.show');


});

require __DIR__.'/auth.php';
