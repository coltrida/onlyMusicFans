<?php

use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index'])->name('index');

Route::get('subscribe', [FrontController::class, 'subscribe'])->name('subscribe');
Route::post('subscribe', [FrontController::class, 'subscribePost'])->name('subscribe.post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
