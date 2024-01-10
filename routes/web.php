<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserTitleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::prefix('/admin')->group(function () {
        Route::get('home', [HomeController::class, 'adminHome'])->name('admin.home');

        Route::prefix('users')->group(function () {
            Route::resource('titles', UserTitleController::class)->except('show', 'create', 'destroy', 'update', 'edit');
            Route::get('titles/delete/{id}', [UserTitleController::class, 'delete'])->name('titles.delete');
            Route::get('titles/editModal/{id}', [UserTitleController::class, 'editModal'])->name('titles.editModal');
            Route::post('titles/updateModal', [UserTitleController::class, 'updateModal'])->name('titles.updateModal');
            Route::post('titles/changeStatus/{id}/{status}', [UserTitleController::class, 'changeStatus']);
        });
    });

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

