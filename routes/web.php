<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Services\ServiceController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ur'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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