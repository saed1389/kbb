<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserTitleController;
use App\Http\Controllers\Backend\UserJobController;
use App\Http\Controllers\Backend\EventCategoryController;
use App\Http\Controllers\Backend\NewsCategoryController;
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

        // Event Category Routes
        Route::resource('event-categories', EventCategoryController::class)->except('show', 'create', 'destroy', 'update', 'edit');
        Route::get('event-categories/delete/{id}', [EventCategoryController::class, 'delete'])->name('event-categories.delete');
        Route::get('event-categories/editModal/{id}', [EventCategoryController::class, 'editModal'])->name('event-categories.editModal');
        Route::post('event-categories/updateModal', [EventCategoryController::class, 'updateModal'])->name('event-categories.updateModal');
        Route::post('event-categories/changeStatus/{id}/{status}', [EventCategoryController::class, 'changeStatus']);

        // News Category Routes
        Route::resource('news-categories', NewsCategoryController::class)->except('show', 'create', 'destroy', 'update', 'edit');
        Route::get('news-categories/delete/{id}', [NewsCategoryController::class, 'delete'])->name('news-categories.delete');
        Route::get('news-categories/editModal/{id}', [NewsCategoryController::class, 'editModal'])->name('news-categories.editModal');
        Route::post('news-categories/updateModal', [NewsCategoryController::class, 'updateModal'])->name('news-categories.updateModal');
        Route::post('news-categories/changeStatus/{id}/{status}', [NewsCategoryController::class, 'changeStatus']);
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


