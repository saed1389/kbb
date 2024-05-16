<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Fetch all news
});

Route::get('allNews', [NewsController::class, 'index']);
Route::get('sliders', [NewsController::class, 'slider']);
Route::get('news-detail/{id}', [NewsController::class, 'show']);
Route::get('events', [NewsController::class, 'events']);
Route::get('event-detail/{id}', [NewsController::class, 'eventDetail']);


