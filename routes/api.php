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
    Route::get('kbbCompetencePoint', [NewsController::class, 'kbbCompetencePoint']);
    Route::get('allNews', [NewsController::class, 'index']);
    Route::get('sliders', [NewsController::class, 'slider']);
    Route::get('news-detail/{id}', [NewsController::class, 'show']);
    Route::get('events', [NewsController::class, 'events']);
    Route::get('event-detail/{id}', [NewsController::class, 'eventDetail']);
    Route::get('chatUser', [NewsController::class, 'chatUser']);
    Route::get('profile', [NewsController::class, 'profile']);
    Route::post('profileStore', [NewsController::class, 'profileStore']);
    Route::post('kbbSchool', [NewsController::class, 'kbbSchool']);
    Route::get('kbbSchoolGet', [NewsController::class, 'kbbSchoolGet']);
    Route::post('kbbCompetenceStore', [NewsController::class, 'kbbCompetenceStore']);
    Route::get('kbbCompetenceList', [NewsController::class, 'kbbCompetenceList']);

    Route::get('kbbCompetenceTotal', [NewsController::class, 'kbbCompetenceTotal']);
    Route::get('notification', [NewsController::class, 'notification']);

    /*Route::post("SendMessage", [ChatController::class, "SendMessage"]);
    Route::get("load", [ChatController::class, "LoadThePreviousMessages"]);*/
});




