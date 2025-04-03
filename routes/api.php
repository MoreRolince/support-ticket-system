<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Exemple de route API
Route::get('/test', function () {
    return response()->json(['message' => 'API Laravel fonctionne !']);
});
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('tickets', TicketController::class);
});
