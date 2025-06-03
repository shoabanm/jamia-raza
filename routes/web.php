<?php

use App\Http\Controllers\AyatController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\HadithController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PictureGalleryController;
use App\Http\Controllers\SayingController;
use App\Http\Controllers\Services\ServiceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubCampusController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ur'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/update_profile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('profile.update');
Route::get('/admin/users', [App\Http\Controllers\HomeController::class, 'allUsers'])->name('admin.users.index');
Route::get('/general-settings', [App\Http\Controllers\FrontendController::class, 'settings'])->name('settings');
Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('frontend.home');
Route::get('/digital-library', [App\Http\Controllers\FrontendController::class, 'showBooksPage'])->name('frontend.digital_libraray');
Route::get('/teachers', [App\Http\Controllers\FrontendController::class, 'showTeachersPage'])->name('frontend.teachers');
Route::get('/services', [App\Http\Controllers\FrontendController::class, 'showServicesPage'])->name('frontend.services');
Route::get('/services/{id}', [App\Http\Controllers\FrontendController::class, 'showSingleServicesPage'])->name('frontend.single.services');
Route::get('/ayat-of-the-day/{id}', [App\Http\Controllers\FrontendController::class, 'showSingleAyatPage'])->name('frontend.single.ayat');
Route::get('/hadith-of-the-day/{id}', [App\Http\Controllers\FrontendController::class, 'showSingleHadithPage'])->name('frontend.single.hadith');
Route::get('/saying-of-the-day/{id}', [App\Http\Controllers\FrontendController::class, 'showSingleSayingPage'])->name('frontend.single.saying');
Route::get('/department/{id}', [App\Http\Controllers\FrontendController::class, 'showSingleDepartmentPage'])->name('frontend.single.department');
Route::get('/picture-galllery/{id}', [App\Http\Controllers\FrontendController::class, 'showSinglePictureGalleryPage'])->name('frontend.single.picture_gallery');
Route::get('/event/{id}', [App\Http\Controllers\FrontendController::class, 'showSingleEventPage'])->name('frontend.single.event');
Route::get('/news/{id}', [App\Http\Controllers\FrontendController::class, 'showSingleNewsPage'])->name('frontend.single.news');
Route::get('/teacher/{id}', [App\Http\Controllers\FrontendController::class, 'showSingleTeacherPage'])->name('frontend.single.teacher');
Auth::routes();

Route::controller(DepartmentController::class)
    ->middleware(['auth'])
    ->prefix('admin/departments')
    ->group(function () {
        Route::get('/', 'index')->name('admin.departments.index');
        Route::get('/create', 'create')->name('admin.departments.create');
        Route::post('/store', 'store')->name('admin.departments.store');
        Route::get('/{department}/edit', 'edit')->name('admin.departments.edit');
        Route::put('/{department}/update', 'update')->name('admin.departments.update');
        Route::delete('/{department}/delete', 'destroy')->name('admin.departments.destroy');
    });

    // Resource routes
    Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
        Route::resource('ayat', AyatController::class);
        Route::resource('hadith', HadithController::class);
        Route::resource('saying', SayingController::class);
        Route::resource('picture_gallery', PictureGalleryController::class);
        Route::resource('events', EventController::class);
        Route::resource('news', NewsController::class);
        Route::resource('books', BookController::class);
        Route::resource('sub_campuses', SubCampusController::class);
        Route::resource('teachers', TeacherController::class);
        Route::resource('founders', FounderController::class)->except(['create', 'store']);
    });

    // only users with “approve” may hit this
    Route::patch(
        'admin/ayat/{ayat}/approve',
        [AyatController::class, 'approveAyat']
    )
    ->name('admin.ayat.approve')
    ->middleware(['auth', 'can:approve']);

    Route::patch(
        'admin/hadith/{hadith}/approve',
        [HadithController::class, 'approveHadith']
    )
    ->name('admin.hadith.approve')
    ->middleware(['auth', 'can:approve']);

    Route::patch(
        'admin/saying/{saying}/approve',
        [SayingController::class, 'approveSaying']
    )
    ->name('admin.saying.approve')
    ->middleware(['auth', 'can:approve']);


    
    // General settings routes 
    Route::middleware('auth')->prefix('admin')->name('admin.')->group(function() {
        Route::get('general-settings-app', [GeneralSettingController::class, 'index'])->name('general-settings-app.index');
        Route::get('general-settings-app/edit', [GeneralSettingController::class, 'edit'])->name('general-settings-app.edit');
        Route::put('general-settings-app', [GeneralSettingController::class, 'update'])->name('general-settings-app.update');
    });
    
    Route::controller(ServiceController::class)
    ->middleware(['auth'])
    ->prefix('admin/services')
    ->group(function () {
        Route::get('/', 'index')->name('admin.services.index');
        Route::get('/create', 'create')->name('admin.services.create');
        Route::post('/store', 'store')->name('admin.services.store');
        Route::get('/{service}/edit', 'edit')->name('admin.services.edit');
        Route::put('/{service}/update', 'update')->name('admin.services.update');
        Route::delete('/{service}/delete', 'destroy')->name('admin.services.destroy');
    });

    Route::controller(StudentController::class)
    ->middleware(['auth'])
    ->prefix('admin/students')
    ->group(function () {
        Route::get('/', 'index')->name('admin.students.index');
        Route::get('/create', 'create')->name('admin.students.create');
        Route::post('/store', 'store')->name('admin.students.store');
        Route::get('/{student}/edit', 'edit')->name('admin.students.edit');
        Route::put('/{student}/update', 'update')->name('admin.students.update');
        Route::delete('/{student}/delete', 'destroy')->name('admin.students.destroy');
    });