<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserTitleController;
use App\Http\Controllers\Backend\UserJobController;
use App\Http\Controllers\Backend\EventCategoryController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\NewsCategoryController;
use App\Http\Controllers\Backend\PhotoCategoryController;
use App\Http\Controllers\Backend\MemberTypeController;
use App\Http\Controllers\Backend\DocumentController;
use App\Http\Controllers\Backend\ScholarshipController;
use App\Http\Controllers\Backend\ImageController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\MailListController;
use App\Http\Controllers\Backend\BulkEmails;
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
        Route::get('profile/{id}', [HomeController::class, 'profileShow'])->name('admin.profile');
        Route::get('profile-edit/{id}', [HomeController::class, 'profile'])->name('admin-profile-edit');
        Route::post('profile-edit-update/{id}', [HomeController::class, 'profileUpdate'])->name('admin-profile-edit-update');
        Route::get('profile-edit-photo/{id}', [HomeController::class, 'profilePhoto'])->name('admin-profile-photo');
        Route::post('profile-webcam-store/{id}', [HomeController::class, 'webcamStore'])->name('profile-webcam-store');
        Route::post('profile-file-store/{id}', [HomeController::class, 'fileStore'])->name('profile-file-store');
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

            // User Routes
            Route::resource('members', UserController::class)->except('destroy', 'show');
            Route::get('members/delete/{id}', [UserController::class, 'delete'])->name('members.delete');
            Route::get('members/deleteImage/{id}', [UserController::class, 'deleteImage'])->name('members.deleteImage');
            Route::get('members/deleteCV/{id}', [UserController::class, 'deleteCV'])->name('members.deleteCV');
            Route::get('members/suspend', [UserController::class, 'suspend'])->name('members.suspend');
            Route::get('members/applications', [UserController::class, 'applications'])->name('members.applications');
            Route::get('members/applications/{id}/show', [UserController::class, 'show'])->name('members.show');
            Route::post('members/changeStatus/{id}/{status}', [UserController::class, 'changeStatus']);
            Route::get('get_members', [UserController::class, 'GetMembers'])->name('get_members');
            Route::get('get_suspends', [UserController::class, 'getSuspends'])->name('get_suspends');
            Route::get('get_applications', [UserController::class, 'getApplications'])->name('get_applications');

            // Mailin List Routes
            Route::resource('mailingUsers', MailListController::class)->except('show', 'destroy', 'create', 'edit');
            Route::post('mailingUsers/changeStatus/{id}/{status}', [MailListController::class, 'changeStatus']);
            Route::get('mailingUsers/delete/{id}', [MailListController::class, 'delete'])->name('mailingUsers.delete');
            Route::get('mailingUsers/editModal/{id}', [MailListController::class, 'editModal'])->name('mailingUsers.editModal');
            Route::post('mailingUsers/updateModal', [MailListController::class, 'updateModal'])->name('mailingUsers.updateModal');
            Route::get('mailingUsers/bulkMail', [MailListController::class, 'bulk'])->name('mailingUsers.bulkMail');
            Route::get('mailingUsers/bulkMail/news-mail', [MailListController::class, 'bulkNews'])->name('mailingUsers.bulkNews');
            Route::get('mailingUsers/bulkMail/flash-news', [MailListController::class, 'flashNews'])->name('mailingUsers.flashNews');
            Route::get('mailingUsers/bulkMail/deceaseNewsMail', [MailListController::class, 'deceaseNewsMail'])->name('mailingUsers.deceaseNewsMail');
            Route::get('mailingUsers/bulkMail/entryNewsMail', [MailListController::class, 'entryNewsMail'])->name('mailingUsers.entryNewsMail');
            Route::get('get_mailList', [MailListController::class, 'GetMailList'])->name('get_mailList');
            Route::get('mailingUsers/get_news_data/{id}', [MailListController::class, 'getNewsData'])->name('mailingUsers.get_news_data');
            Route::post('send-emails', [BulkEmails::class, 'sendBulkNews'])->name('send-bulk-news');
            Route::post('send-flash-news', [BulkEmails::class, 'sendFlashNews'])->name('send-flash-news');
            Route::post('send-decease-news', [BulkEmails::class, 'sendDeceaseNews'])->name('send-decease-news');
            Route::post('send-entry-news', [BulkEmails::class, 'sendEntryNews'])->name('send-entry-news');
        });

        // Document Routes
        Route::resource('documents', DocumentController::class)->except('destroy');
        Route::get('documents/delete/{id}', [DocumentController::class, 'delete'])->name('documents.delete');
        Route::post('documents/changeStatus/{id}/{status}', [DocumentController::class, 'changeStatus']);
        Route::get('get_documents', [DocumentController::class, 'GetDocuments'])->name('get_documents');

        // Scholarship Routes
        Route::resource('scholarships', ScholarshipController::class)->except('destroy');
        Route::get('scholarships/delete/{id}', [ScholarshipController::class, 'delete'])->name('scholarships.delete');
        Route::post('scholarships/changeStatus/{id}/{status}', [ScholarshipController::class, 'changeStatus']);
        Route::get('get_scholarships', [ScholarshipController::class, 'GetScholarships'])->name('get_scholarships');

        // Comment Routes
        Route::resource('comments', CommentController::class)->except('create', 'store', 'destroy', 'edit', 'update');
        Route::get('comments/delete/{id}', [CommentController::class, 'delete'])->name('comments.delete');
        Route::post('comments/changeStatus/{id}/{status}', [CommentController::class, 'changeStatus']);

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

        // Photo Gallery Routes
        Route::prefix('photos')->group(function () {
            Route::resource('galleries', PhotoCategoryController::class)->except('create', 'destroy', 'update', 'edit');
            Route::get('galleries/delete/{id}', [PhotoCategoryController::class, 'delete'])->name('galleries.delete');
            Route::get('galleries/editModal/{id}', [PhotoCategoryController::class, 'editModal'])->name('galleries.editModal');
            Route::post('galleries/updateModal', [PhotoCategoryController::class, 'updateModal'])->name('galleries.updateModal');
            Route::post('galleries/changeStatus/{id}/{status}', [PhotoCategoryController::class, 'changeStatus']);

            Route::resource('images', ImageController::class)->except('destroy', 'create', 'store');
            Route::post('images/add', [ImageController::class, 'add'])->name('images.add');
            Route::get('images/delete/{id}', [ImageController::class, 'delete'])->name('images.delete');
        });

        // News Routes
        Route::resource('news', NewsController::class)->except('show', 'destroy');
        Route::get('news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');
        Route::post('news/changeStatus/{id}/{status}', [NewsController::class, 'changeStatus']);
        Route::get('get_news', [NewsController::class, 'GetNews'])->name('get_news');

        // Event Routes
        Route::resource('events', EventController::class)->except('show', 'destroy');
        Route::get('events/delete/{id}', [EventController::class, 'delete'])->name('events.delete');
        Route::post('events/changeStatus/{id}/{status}', [EventController::class, 'changeStatus']);
        Route::get('get_events', [EventController::class, 'GetEvents'])->name('get_events');

        // Member Type Routes
        Route::resource('member-types', MemberTypeController::class)->except('show', 'create', 'destroy', 'update', 'edit');
        Route::get('member-types/delete/{id}', [MemberTypeController::class, 'delete'])->name('member-types.delete');
        Route::get('member-types/editModal/{id}', [MemberTypeController::class, 'editModal'])->name('member-types.editModal');
        Route::post('member-types/updateModal', [MemberTypeController::class, 'updateModal'])->name('member-types.updateModal');
        Route::post('member-types/changeStatus/{id}/{status}', [MemberTypeController::class, 'changeStatus']);
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


