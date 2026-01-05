<?php

use App\Http\Controllers\SedController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::get('/', function () {
        return response()->json([
            'message' => 'Welcome to TechID Backend API!',
            'status' => 'success',
        ]);
    });

    Route::apiResource('seds', SedController::class);
});