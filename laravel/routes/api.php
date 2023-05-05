<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TokenController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\SongController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', [TokenController::class, 'user'])->middleware('auth:sanctum');

Route::post('/logout', [TokenController::class, 'logout'])->middleware('auth:sanctum');

Route::post('/login', [TokenController::class, 'login']);

Route::post('/register', [TokenController::class, 'register']);

Route::get('/events', [EventController::class, 'index']);

Route::get('/events/{id}', [EventController::class, 'show']);

Route::get('/artists', [ArtistController::class, 'index']);

Route::get('/artists/{id}', [ArtistController::class, 'show']);

Route::get('/songs', [SongController::class, 'index']);

Route::get('/songs/{id}', [SongController::class, 'show']);

