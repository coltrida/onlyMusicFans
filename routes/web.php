<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;


Route::get('/', [FrontController::class, 'index'])->name('index');
Route::post('/contact/mail', [FrontController::class, 'contactMail'])->name('contact.mail.post');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(
    [
        'middleware' => ['auth'],
    ],
    function(){
        Route::get('/payment/{idConcert}', [FrontController::class, 'payment'])->name('payment');
        Route::post('/payment', [FrontController::class, 'paymentPost'])->name('paymentPost');
    }
);


Route::group(
    [
        'middleware' => ['auth','verifyIsAdmin'],
        'prefix' => 'admin'
    ],
    function(){
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/users/list', [AdminController::class, 'users'])->name('admin.users.list');
        Route::get('/events/list', [AdminController::class, 'events'])->name('admin.events.list');
        Route::get('/events/create', [AdminController::class, 'createEvent'])->name('admin.events.create');
        Route::post('/events/create', [AdminController::class, 'storeEvent'])->name('admin.events.store');
    }
);
