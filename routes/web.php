<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserTitleController;
use App\Http\Controllers\Backend\UserJobController;
use App\Http\Controllers\Frontend\IndexController;

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

Route::post('/province/fetch-city', [IndexController::class,'province_fetch_city'])->name('province.fetch-city');
Route::post('/user_register', [IndexController::class,'user_register'])->name('user_register');
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
        Route::get('/logout', [HomeController::class, 'AdminLogout'])->name('admin.logout');
        Route::prefix('users')->group(function () {
            // User Title Routes
            Route::resource('titles', UserTitleController::class)->except('show', 'create', 'destroy', 'update', 'edit');
            Route::get('titles/delete/{id}', [UserTitleController::class, 'delete'])->name('titles.delete');
            Route::get('titles/editModal/{id}', [UserTitleController::class, 'editModal'])->name('titles.editModal');
            Route::post('titles/updateModal', [UserTitleController::class, 'updateModal'])->name('titles.updateModal');
            Route::post('titles/changeStatus/{id}/{status}', [UserTitleController::class, 'changeStatus']);

            // User Job Routes
            Route::resource('jobs', UserJobController::class)->except('show', 'create', 'destroy', 'update', 'edit');
            Route::get('jobs/delete/{id}', [UserJobController::class, 'delete'])->name('jobs.delete');
            Route::get('jobs/editModal/{id}', [UserJobController::class, 'editModal'])->name('jobs.editModal');
            Route::post('jobs/updateModal', [UserJobController::class, 'updateModal'])->name('jobs.updateModal');
            Route::post('jobs/changeStatus/{id}/{status}', [UserJobController::class, 'changeStatus']);
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


