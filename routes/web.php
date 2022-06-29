<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsersController
};

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth'])->group(function () {
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy')->middleware('auth');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update')->middleware('auth');
    Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit')->middleware('auth');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index')->middleware('auth');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create')->middleware('auth');
    Route::post('/users', [UsersController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UsersController::class, 'show'])->name('users.show');
});


Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin',[UsersController::class, 'admin'])->name('admin');
});



