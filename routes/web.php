<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index'])->name('index');

Route::get('subscribe', [FrontController::class, 'subscribe'])->name('subscribe');
Route::post('subscribe', [FrontController::class, 'subscribePost'])->name('subscribe.post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


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
