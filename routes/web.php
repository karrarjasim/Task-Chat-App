<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/send-message', [ChatController::class, 'sendMessage']);