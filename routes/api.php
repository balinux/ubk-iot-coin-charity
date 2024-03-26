<?php

use App\Http\Controllers\API\DonationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tes', function (Request $request) {
    return User::all();
});

Route::post('/donation/store', [DonationController::class, 'store']);
