<?php

use App\Http\Controllers\Api\MobilController;
use App\Http\Controllers\Api\SepatuController;
use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function() {
    return 'Halo dari BTNG 2026';
});

Route::get('/info', function() {
    return response()->json([
        'app' => 'Task Api',
        'version' => '1.0',
        'author' => 'BTNG 2026',
    ]);
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/{id}', [TaskController::class, 'show']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::patch('/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

// Sepatu
Route::get('/sepatu', [SepatuController::class, 'index']);
Route::post('/sepatu', [SepatuController::class, 'store']);
Route::get('/sepatu/{id}', [SepatuController::class, 'show']);
Route::put('/sepatu/{id}', [SepatuController::class, 'update']);
Route::patch('/sepatu/{id}', [SepatuController::class, 'update']);
Route::delete('/sepatu/{id}', [SepatuController::class, 'destroy']);

// Mobil
Route::get('/mobil', [MobilController::class, 'index']);
Route::post('/mobil', [MobilController::class, 'store']);
Route::get('/mobil/{id}', [MobilController::class, 'show']);
Route::put('/mobil/{id}', [MobilController::class, 'update']);
Route::patch('/mobil/{id}', [MobilController::class, 'update']);
Route::delete('/mobil/{id}', [MobilController::class, 'destroy']);
