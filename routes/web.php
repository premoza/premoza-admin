<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    // overview
    Route::get('/', function () {
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];
        return view('index', compact('data'));
    });

    Route::get('/verification', function () {
        return view('verification');
    });

    Route::get('/settings', function () {
        return view('settings');
    });

    Route::get('/tickets', function () {
        return view('tickets');
    });

    Route::get('/about', function () {
        return view('about');
    });

    /*
     * Property
     */
    Route::get('/property/add', [PropertyController::class, 'add']);
    Route::get('/property/list', [PropertyController::class, 'list']);

    /*
     * API
     */
});


Auth::routes(['register' => false]);
