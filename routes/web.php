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
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ZoomController;
use App\Http\Controllers\Backend\PresidentController;
use App\Http\Controllers\Backend\DirectorController;
use App\Http\Controllers\Backend\MailListController;
use App\Http\Controllers\Backend\BulkEmails;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\SubMenuController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\TorlakController;
use App\Http\Controllers\Backend\User\UserNewsController;
use App\Http\Controllers\Backend\User\UserCompetenceController;
use App\Http\Controllers\Backend\CompetencePointController;
use App\Http\Controllers\Backend\SchoolController;
use App\Http\Controllers\Backend\CommitteesController;
use App\Http\Controllers\Backend\AdvertisementController;
use App\Http\Controllers\Backend\HistoryCommitteesController;
use App\Http\Controllers\Backend\ContactsController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\NewsFrontController;
use App\Http\Controllers\Errors;

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
Route::get('419', [Errors::class, 'expire'])->name('419');
Route::post('/province/fetch-city', [IndexController::class,'province_fetch_city'])->name('province.fetch-city');
Route::post('/user_register', [IndexController::class,'user_register'])->name('user_register');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/home', [IndexController::class, 'home'])->name('home');
Route::prefix('dernegmz')->group(function () {
    Route::get('', function (){
        return view('frontend.our_association.index');
    })->name('dernegmz');
    Route::get('baskanlarimiz', [IndexController::class, 'baskan'])->name('baskan');
    Route::get('kurullar-listesi', function (){
        return view('frontend.our_association.committees');
    })->name('kurullar');

    Route::prefix('kurullar')->group(function () {
        Route::get('yonetim-kurulu', [IndexController::class, 'younetim'])->name('yonetimkurulu');
        Route::get('denetleme-kurulu', [IndexController::class, 'denetleme'])->name('denetleme_kurulu');
        Route::get('danisma-kurulu', [IndexController::class, 'danisma'])->name('danisma_kurulu');
        Route::get('onur-ve-etik-kurulu', [IndexController::class, 'onur_ve_etik'])->name('onur_ve_etik_kurulu');
        Route::get('yeterlik-yurutme-kurulu', [IndexController::class, 'yeterlik_yurutme'])->name('yeterlik_yurutme_kurulu');
        Route::get('gecmis-donemler-yonetimkurullari', [IndexController::class, 'gecmis'])->name('gecmis_donemler_yonetimkurullari');
    });
    Route::get('tarihce', function (){
        return view('frontend.our_association.history');
    })->name('tarihce');
    Route::get('iktisadi-isletme', [IndexController::class, 'economic_business'])->name('iktisadi_isletme');
    Route::get('ktisadisletme', [IndexController::class, 'ktisadisletme'])->name('ktisadisletme');
    Route::get('kararlar', [IndexController::class, 'kararlar'])->name('kararlar');
    Route::get('belgeler-yonetmelik-ve-yonergeler', [IndexController::class, 'yonetmelik'])->name('yonetmelik');
    Route::get('tanitimfilmi', [IndexController::class, 'tanitimfilmi'])->name('tanitimfilmi');
    Route::prefix('kararlar')->group(function () {
        Route::get('', function (){
            return view('frontend.our_association.decisions');
        })->name('kararlar');
        Route::get('belgeler-yonetim-kurulu-kararlari', function (){
            return view('frontend.our_association.documents-board-decisions');
        })->name('belgeler_yonetim_kurulu_kararlari');
        Route::get('belgeler-etik-ve-onur-kurulu-kararlari', function (){
            return view('frontend.our_association.documents-ethics-and-honor-board-decisions');
        })->name('belgeler-etik-ve-onur-kurulu-kararlari');
        Route::get('belgeler-kongre-sartnameleri', function (){
            return view('frontend.our_association.documents-congress-specifications');
        })->name('belgeler-kongre-sartnameleri');
    });
    Route::get('belgeler-yonetmelik-ve-yonergeler', function () {
        return view('frontend.our_association.regulations');
    })->name('belgeler_yonetmelik_ve_yonergeler');

    Route::get('tanitim-filmi', function () {
        return view('frontend.our_association.introFilm');
    })->name('tanitim-filmi');

});

Route::prefix('bilgi-merkezi')->group(function () {
    Route::get('dergiler', function () {
        return view('frontend.info-center.magazines');
    })->name('dergiler');
    Route::get('', function (){
        return view('frontend.info-center.index');
    })->name('bilgi-merkezi');
    Route::get('hasta-bilgilendirme-brosurleri', function (){
        return view('frontend.info-center.patient-information');
    })->name('hasta_bilgilendirme_brosurleri');
    Route::get('gecmis-kongre-program-ve-bildirikitaplari', function (){
        return view('frontend.info-center.past-congress-programs');
    })->name('gecmis-kongre-program-ve-bildirikitaplari');
    Route::get('belgeler-tipta-uzmanlik-egitimi-karnesi', function () {
        return view('frontend.info-center.training-report');
    })->name('belgeler-tipta-uzmanlik-egitimi-karnesi');
    Route::prefix('onam-formlari')->group(function () {
        Route::get('', function (){
            return view('frontend.info-center.consent-forms.index');
        })->name('onam_formlari');
        Route::get('rinoloji-onam-formlari', function (){
            return view('frontend.info-center.consent-forms.rhinology');
        })->name('rinoloji_onam_formlari');
        Route::get('bas-boyun-onam-formlari', function () {
            return view('frontend.info-center.consent-forms.head-neck');
        })->name('bas-boyun_onam_formlari');
        Route::get('otoloji-onam-formlari', function () {
            return view('frontend.info-center.consent-forms.otology');
        })->name('otoloji_onam_formlari');
        Route::get('pediatrik-kbb-onam-formlari', function () {
            return view('frontend.info-center.consent-forms.pediatric-KBB');
        })->name('pediatrik_kbb_onam_formlari');
    });
    Route::get('kilavuzlar', function () {
        return view('frontend.info-center.guides');
    })->name('kilavuzlar');
    Route::get('ttb-ucret-tarifesi', function () {
        return view('frontend.info-center.TTB-fee');
    })->name('ttb-ucret-tarifesi');
    Route::get('satin-alma-sureci', function (){
        return view('frontend.info-center.process-buying');
    })->name('satin-alma-sureci');
    Route::get('uzmanlik-egitimi-kitablari', function (){
        return view('frontend.info-center.training-books');
    })->name('uzmanlik_egitimi_kitablari');
    Route::get('uzmanlik-egitimi-kitablari-1', function (){
        return view('frontend.info-center.training-books-1');
    })->name('uzmanlik_egitimi_kitablari-1');
    Route::get('uzmanlik-egitimi-kitablari-2', function (){
        return view('frontend.info-center.training-books-2');
    })->name('uzmanlik_egitimi_kitablari-2');
    Route::get('linkler', function () {
        return view('frontend.info-center.links');
    })->name('linkler');
    Route::get('turk-kbb-bbc-dernegi-etik-kitabi', function () {
        return view('frontend.info-center.turkish-kbb-bbc');
    })->name('turk-kbb-bbc-dernegi-etik-kitabi');

    Route::prefix('haberler')->group(function () {
        Route::get('haber/{slug}', [NewsFrontController::class, 'show'])->name('haber');
        Route::post('news/comment', [NewsFrontController::class, 'comment'])->name('news.comment');
        Route::get('news/search', [NewsFrontController::class, 'search'])->name('news.search');
        Route::get('', [NewsFrontController::class, 'index'])->name('haberler');
    });

    Route::prefix('etkinlikler')->group( function () {
        Route::get('etkinlik/{slug}', [NewsFrontController::class, 'eventShowEvent'])->name('etkinlik.event');
        Route::get('{id}/{slug}', [NewsFrontController::class, 'eventShow'])->name('etkinlik');
        Route::get('', [NewsFrontController::class, 'events'])->name('etkinlikler');
    });
});

Route::prefix('burs-oduller')->group(function () {
    Route::get('', function (){
        return view('frontend.scholarship.index');
    })->name('burs_oduller');
    Route::get('burslar', function () {
        return view('frontend.scholarship.scholarship');
    })->name('burslar');
    Route::get('turk-kbb-ve-bbc-dernegi-kisa-sureli-yurtdisi', function () {
        return view('frontend.scholarship.turk-KBB');
    })->name('turk-kbb-ve-bbc-dernegi-kisa-sureli-yurtdisi');
    Route::get('basvuru-yurtdisi-egitim-bursu', [IndexController::class, 'scholarshipApp'])->name('basvuru-yurtdisi-egitim-bursu');
    Route::post('scholarshipStore', [IndexController::class, 'scholarshipAppStore'])->name('scholarship-app-store');
    Route::get('oduller', function () {
        return view('frontend.scholarship.awards');
    })->name('oduller');
    Route::get('proje-destek', function (){
        return view('frontend.scholarship.project-support');
    })->name('proje-destek');
    Route::get('bilimsel-arastirma-destekleme-koordinasyon-birimi-formlari', function () {
        return view('frontend.scholarship.scientific-research');
    })->name('bilimsel-arastirma-destekleme-koordinasyon-birimi-formlari');
    Route::get('asistan-okulu', [IndexController::class, 'assistantSchool'])->name('asistan-okulu');
    Route::get('degisim-programi', [IndexController::class, 'exchangeProgram'])->name('degisim-programi');
});

Route::get('online-kutuphane', function () {
    return view('frontend.online-library');
})->name('online-kutuphane');
Route::prefix('yoresel-dernekler-ve-alt-bilimdallari')->group(function () {
    Route::get('', function () {
        return view('frontend.regional-associations');
    })->name('yoresel-dernekler-ve-alt-bilimdallari');
    Route::get('yoresel-dernekler',[IndexController::class, 'localAssociations'])->name('yoresel-dernekler');
    Route::get('alt-bilim-dallari',[IndexController::class, 'subBranches'])->name('alt-bilim-dallari');
    Route::get('dernek-baskanimizdan-29-ekim-cumhuriyet-bayram', function () {
        return view('frontend.president-message');
    })->name('dernek-baskanimizdan-29-ekim-cumhuriyet-bayram');
});
Route::get('baskana-ulas',function () {
    return view('frontend.contacts.president-message');
})->name('baskana-ulas');
Route::get('bir-fikrim-var',function () {
    return view('frontend.contacts.idea-contact');
})->name('bir-fikrim-var');
Route::get('bize-ulasin',function () {
    return view('frontend.contacts.contact');
})->name('bize-ulasin');
Route::post('contactStore', [IndexController::class, 'contact'])->name('contactStore');
Route::get('uye-listesi', [IndexController::class, 'usersList'])->name('uye-listesi');
Route::get('get-users-list', [IndexController::class, 'getUserList'])->name('get-user-list');
Route::get('etkinlik-takvim', [IndexController::class, 'calendar'])->name('etkinlik-takvim');
Route::get('calenderEvents', [IndexController::class, 'calenderEvents'])->name('calenderEvents');
Route::get('hastalar-icin-bilgiler', function () {
    return view('frontend.information_patient.index');
})->name('hastalar-icin-bilgiler');
Route::get('kulak', function () {
    return view('frontend.information_patient.ear');
})->name('kulak');
Route::get('burun', function () {
    return view('frontend.information_patient.nose');
})->name('burun');
Route::get('bogaz', function () {
    return view('frontend.information_patient.throat');
})->name('bogaz');
Route::get('pediatrik-kbb', function () {
    return view('frontend.information_patient.pediatric');
})->name('pediatrikkbb');
Route::get('kbb-tumorleri', function () {
    return view('frontend.information_patient.tumors');
})->name('kbbtumorleri');
Route::get('uyelik-kosullari', function () {
    return view('frontend.info-center.uye');
})->name('uyelik-kosullari');
Route::get('search', [IndexController::class, 'search'])->name('search');
Route::get('kullanici/{id}/{slug}', [IndexController::class, 'user'])->name('kullanici');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('home', [HomeController::class, 'userIndex'])->name('user.home');
        Route::get('logout', [HomeController::class, 'userLogout'])->name('user.logout');
        Route::get('profile/{id}', [HomeController::class, 'userProfileShow'])->name('user.profile');
        Route::get('profile-edit/{id}', [HomeController::class, 'userProfile'])->name('user-profile-edit');
        Route::post('profile-edit-update/{id}', [HomeController::class, 'userProfileUpdate'])->name('user-profile-edit-update');
        Route::get('profile-edit-photo/{id}', [HomeController::class, 'userProfilePhoto'])->name('user-profile-photo');
        Route::post('profile-webcam-store/{id}', [HomeController::class, 'userWebcamStore'])->name('user-profile-webcam-store');
        Route::post('profile-file-store/{id}', [HomeController::class, 'userFileStore'])->name('user-profile-file-store');

        Route::resource('UserNews', UserNewsController::class)->except('show', 'destroy')
            ->name('create', 'userCreate.news')
            ->name('index', 'userIndex.news')
            ->name('edit', 'userEdit.news')
            ->name('update', 'userUpdate.news')
            ->name('store', 'userStore.news');
        Route::get('UserNews/delete/{id}', [UserNewsController::class, 'delete'])->name('userNews.delete');
        Route::get('get_user_news', [UserNewsController::class, 'GetNews'])->name('get_user_news');

        Route::resource('userCompetences', UserCompetenceController::class)->except('show', 'create', 'destroy', 'update', 'edit');
        Route::get('userCompetences/editModal/{id}', [UserCompetenceController::class, 'editModal'])->name('userCompetences.editModal');
        Route::post('userCompetences/updateModal', [UserCompetenceController::class, 'updateModal'])->name('userCompetences.updateModal');
        Route::get('userCompetences/delete/{id}', [UserCompetenceController::class, 'delete'])->name('userCompetences.delete');
        Route::get('userCompetences/request/{id}', [UserCompetenceController::class, 'request'])->name('userCompetences.request');

        Route::resource('schools', SchoolController::class)->except('show', 'destroy');
        Route::get('schools/delete/{id}', [SchoolController::class, 'delete'])->name('schools.delete');

        Route::prefix('torlak')->group(function () {
            Route::get('videos', [TorlakController::class, 'videosUser'])->name('videos-user');
            Route::get('congresses', [TorlakController::class, 'congressesUser'])->name('congresses-user');
            Route::get('showVideo/{id}', [TorlakController::class, 'showVideo'])->name('show-video-user');
        });
    });
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
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::post('settingsUpdate', [SettingsController::class, 'update'])->name('settings.update');

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
            Route::post('members/ChangeConfirm/{id}/{status}', [UserController::class, 'ChangeConfirm']);
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

        // Contact Routes
        Route::prefix('contacts')->group(function () {
            Route::get('president-contact', [ContactsController::class, 'presidentContact'])->name('president-contact');
            Route::get('new-idea', [ContactsController::class, 'newIdea'])->name('new-idea');
            Route::get('contact-us', [ContactsController::class, 'contactUs'])->name('contact-us');
            Route::get('contact-delete/{id}', [ContactsController::class, 'delete'])->name('contact-delete');
            Route::post('/changeStatus/{id}/{status}', [ContactsController::class, 'changeStatus']);
        });

        // Menu Routes
        Route::resource('menus', MenuController::class)->except('show', 'destroy');
        Route::prefix('menus/')->group(function (){
            Route::resource('presidents', PresidentController::class)->except('show', 'create', 'destroy');
            Route::post('presidents/changeStatus/{id}/{status}', [PresidentController::class, 'changeStatus']);
            Route::post('presidents/currentPresident/{id}/{status}', [PresidentController::class, 'currentPresident']);
            Route::get('presidents/delete/{id}', [PresidentController::class, 'delete'])->name('presidents.delete');

            Route::get('assistant-school', [MenuController::class, 'assistantSchool'])->name('menu.assistantSchool');
            Route::post('assistant-school-update', [MenuController::class, 'assistantSchoolUpdate'])->name('menu.assistantSchoolUpdate');

            Route::get('exchange-program', [MenuController::class, 'exchangeProgram'])->name('menu.exchangeProgram');
            Route::post('exchange-program-update', [MenuController::class, 'exchangeProgramUpdate'])->name('menu.exchangeProgramUpdate');

            Route::get('local-associations', [MenuController::class, 'localAssociations'])->name('menu.localAssociations');
            Route::post('local-associations-update', [MenuController::class, 'localAssociationsUpdate'])->name('menu.localAssociationsUpdate');

            Route::get('sub-branches', [MenuController::class, 'subBranches'])->name('menu.subBranches');
            Route::post('sub-branches-update', [MenuController::class, 'subBranchesUpdate'])->name('menu.subBranchesUpdate');

            Route::prefix('committees')->group(function (){
                Route::resource('directors', DirectorController::class)->except('show', 'create', 'destroy');
                Route::post('directors/changeStatus/{id}/{status}', [DirectorController::class, 'changeStatus']);
                Route::get('directors/delete/{id}', [DirectorController::class, 'delete'])->name('directors.delete');

                Route::get('check', [CommitteesController::class, 'checkIndex'])->name('committees.check');
                Route::post('checkStore', [CommitteesController::class, 'checkStore'])->name('committees.checkStore');
                Route::get('checkEdit/{id}', [CommitteesController::class, 'checkEdit'])->name('committees.checkEdit');
                Route::post('checkUpdate/{id}', [CommitteesController::class, 'checkUpdate'])->name('committees.checkUpdate');

                Route::get('advice', [CommitteesController::class, 'adviceIndex'])->name('committees.advice');
                Route::post('adviceStore', [CommitteesController::class, 'adviceStore'])->name('committees.adviceStore');
                Route::get('adviceEdit/{id}', [CommitteesController::class, 'adviceEdit'])->name('committees.adviceEdit');
                Route::post('adviceUpdate/{id}', [CommitteesController::class, 'adviceUpdate'])->name('committees.adviceUpdate');

                Route::get('honor', [CommitteesController::class, 'honorIndex'])->name('committees.honor');
                Route::post('honorStore', [CommitteesController::class, 'honorStore'])->name('committees.honorStore');
                Route::get('honorEdit/{id}', [CommitteesController::class, 'honorEdit'])->name('committees.honorEdit');
                Route::post('honorUpdate/{id}', [CommitteesController::class, 'honorUpdate'])->name('committees.honorUpdate');

                Route::get('qualification', [CommitteesController::class, 'qualificationIndex'])->name('committees.qualification');
                Route::post('qualificationStore', [CommitteesController::class, 'qualificationStore'])->name('committees.qualificationStore');
                Route::get('qualificationEdit/{id}', [CommitteesController::class, 'qualificationEdit'])->name('committees.qualificationEdit');
                Route::post('qualificationUpdate/{id}', [CommitteesController::class, 'qualificationUpdate'])->name('committees.qualificationUpdate');

                Route::resource('history-committees', HistoryCommitteesController::class)->except('create', 'show', 'destroy');
                Route::get('history-committees/delete/{id}', [HistoryCommitteesController::class, 'delete'])->name('history-committees.delete');

                Route::get('delete/{id}', [CommitteesController::class, 'delete'])->name('committees.delete');
                Route::post('changeStatus/{id}/{status}', [CommitteesController::class, 'changeStatus']);

                Route::get('economic-business', [CommitteesController::class,'economicBusiness'])->name('committees.economicBusiness');
                Route::post('economic-business-update', [CommitteesController::class,'economicBusinessUpdate'])->name('committees.economicBusinessUpdate');
            });
            /*Route::get('/delete/{id}', [MenuController::class, 'delete'])->name('menus.delete');
            Route::post('/updateAccordionOrder', [MenuController::class, 'updateAccordionOrder'])->name('manus.updateAccordionOrder');
            Route::post('/updateTableOrder', [MenuController::class, 'updateTableOrder'])->name('manus.updateTableOrder');*/
            /*Route::get('/footer', [MenuController::class, 'footerMenu'])->name('menus.footer-menu');
            Route::post('/footer/store', [MenuController::class, 'footerMenuStore'])->name('menus.footer-menu-store');
            Route::get('/delete/{id}', [MenuController::class, 'footerMenuDelete'])->name('menus.footer-delete');
            Route::get('/footer/edit/{id}', [MenuController::class, 'footerMenuEdit'])->name('menus.footer-menu-edit');
            Route::post('/footer/update/{id}', [MenuController::class, 'footerMenuUpdate'])->name('menus.footer-menu-update');*/
        });

        Route::post('menus/changeStatus/{id}/{status}', [MenuController::class, 'changeStatus']);

        // SubMenu Routes
        Route::resource('submenus', SubMenuController::class)->except('show', 'destroy');
        Route::get('submenus/delete/{id}', [SubMenuController::class, 'delete'])->name('submenus.delete');
        Route::post('submenus/changeStatus/{id}/{status}', [SubMenuController::class, 'changeStatus']);

        // Document Routes
        Route::resource('documents', DocumentController::class)->except('destroy');
        Route::get('documents/delete/{id}', [DocumentController::class, 'delete'])->name('documents.delete');
        Route::post('documents/changeStatus/{id}/{status}', [DocumentController::class, 'changeStatus']);
        Route::get('get_documents', [DocumentController::class, 'GetDocuments'])->name('get_documents');

        // Scholarship Routes
        Route::resource('scholarships', ScholarshipController::class)->except('destroy', 'show');
        Route::get('scholarships/delete/{id}', [ScholarshipController::class, 'delete'])->name('scholarships.delete');
        Route::get('scholarships/{id}/display', [ScholarshipController::class, 'display'])->name('scholarships.display');
        Route::post('scholarships/changeStatus/{id}/{status}', [ScholarshipController::class, 'changeStatus']);
        Route::get('get_scholarships', [ScholarshipController::class, 'GetScholarships'])->name('get_scholarships');

        // Advertisement Routes
        Route::resource('advertisements', AdvertisementController::class)->except('show','destroy','create');
        Route::get('advertisements/delete/{id}', [AdvertisementController::class, 'delete'])->name('advertisements.delete');
        Route::post('advertisements/changeStatus/{id}/{status}', [AdvertisementController::class, 'changeStatus']);

        // KBB Competences
        Route::get('competencesList', [UserCompetenceController::class, 'list'])->name('competence-list');
        Route::get('competences-unconfirmed', [UserCompetenceController::class, 'unconfirmedList'])->name('unconfirmed-list');
        Route::get('competences-edit-request', [UserCompetenceController::class, 'editRequest'])->name('competences-edit-request');
        Route::get('competences-confirm-request/{id}', [UserCompetenceController::class, 'confirmRequest'])->name('competences-confirm-request');
        Route::post('Competences/confirm', [UserCompetenceController::class, 'confirm'])->name('Competences.confirm');
        Route::get('Competences/editModal/{id}', [UserCompetenceController::class, 'editModal'])->name('Competences.editModal');
        Route::post('Competences/updateModal', [UserCompetenceController::class, 'point'])->name('Competences.updateModal');
        Route::get('Competences/delete/{id}', [UserCompetenceController::class, 'adminDelete'])->name('Competences.delete');


        // KBB School
        Route::get('school-list', [SchoolController::class, 'list'])->name('schools-list');
        Route::post('school-list-change/{id}/{status}', [SchoolController::class, 'changeStatus'])->name('schools-list.status');
        Route::get('school-list-get', [SchoolController::class, 'GetSchool'])->name('get-school');

        // KBB Competences Points
        Route::resource('competencesPoint', CompetencePointController::class)->except('show', 'destroy', 'create');
        Route::post('competencesPoint/changeStatus/{id}/{status}', [CompetencePointController::class, 'changeStatus']);
        Route::get('competencesPoint/delete/{id}', [CompetencePointController::class, 'delete'])->name('competencesPoint.delete');
        Route::get('competencesPoint/member-list/', [CompetencePointController::class, 'memberList'])->name('competences.member-list');
        Route::get('/competences/{id}', [CompetencePointController::class, 'getCompetenceDetails'])->name('competences.details');

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

            // Image Routes
            Route::resource('images', ImageController::class)->except('destroy', 'create', 'store');
            Route::post('images/add', [ImageController::class, 'add'])->name('images.add');
            Route::get('images/delete/{id}', [ImageController::class, 'delete'])->name('images.delete');

            // Videos Routes
            Route::resource('videos', VideoController::class)->except('edit', 'destroy', 'create');
            Route::get('videos/editModal/{id}', [VideoController::class, 'editModal'])->name('videos.editModal');
            Route::post('videos/updateModal', [VideoController::class, 'updateModal'])->name('videos.updateModal');
            Route::get('videos/delete/{id}', [VideoController::class, 'delete'])->name('videos.delete');
            Route::post('videos/changeStatus/{id}/{status}', [VideoController::class, 'changeStatus']);

            // Torlak Routes
            Route::resource('torlak', TorlakController::class)->except('destroy', 'show');
            Route::get('torlak/delete/{id}', [TorlakController::class, 'delete'])->name('torlak.delete');
            Route::post('torlak/changeStatus/{id}/{status}', [TorlakController::class, 'changeStatus']);

        });

        // News Routes
        Route::resource('news', NewsController::class)->except('show', 'destroy');
        Route::get('news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');
        Route::post('news/changeStatus/{id}/{status}', [NewsController::class, 'changeStatus']);
        Route::post('news/changeConfirm/{id}/{confirm}', [NewsController::class, 'changeConfirm']);
        Route::get('get_news', [NewsController::class, 'GetNews'])->name('get_news');
        Route::get('news/confirm', [NewsController::class, 'confirm'])->name('news.confirm');
        Route::get('news/confirmUpdate', [NewsController::class, 'confirmUpdate'])->name('news.confirmUpdate');
        Route::get('news/order', [NewsController::class, 'order'])->name('news.order');
        Route::put('sortOrder', [NewsController::class, 'sortOrder'])->name('news.sort-order');

        // Event Routes
        Route::resource('events', EventController::class)->except('show', 'destroy');
        Route::get('events/delete/{id}', [EventController::class, 'delete'])->name('events.delete');
        Route::post('events/changeStatus/{id}/{status}', [EventController::class, 'changeStatus']);
        Route::get('get_events', [EventController::class, 'GetEvents'])->name('get_events');

        // Zoom and Webinar Routes
        Route::resource('zooms', ZoomController::class)->except('edit', 'destroy', 'create', 'update');
        Route::get('zooms/editModal/{id}', [ZoomController::class, 'editModal'])->name('zooms.editModal');
        Route::post('zooms/updateModal', [ZoomController::class, 'updateModal'])->name('zooms.updateModal');
        Route::get('zooms/delete/{id}', [ZoomController::class, 'delete'])->name('zooms.delete');
        Route::post('zooms/changeStatus/{id}/{status}', [ZoomController::class, 'changeStatus']);

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


