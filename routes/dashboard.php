<?php

use App\Http\Controllers\SubscriberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('subscribers', [SubscriberController::class, 'all'])
    ->name('subscribers.all');
