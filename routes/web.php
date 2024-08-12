<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'labels' => ['January', 'February', 'March', 'April', 'May'],
        'data' => [65, 59, 80, 81, 56],
    ];
    return view('index', compact('data'));
})
    ->middleware('auth');

Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
