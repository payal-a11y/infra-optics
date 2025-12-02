<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use Inertia\Inertia;
use App\Models\Service;
Route::get('/', fn() => Inertia::render('Home'));

// Admin login routes
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin dashboard
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// SERVICE ROUTES (protected)
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');

});


Route::get('/', function () {
    return Inertia::render('Home', [
        'services' => Service::all(),
    ]);
});


Route::get('/admin/services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
Route::put('/admin/services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/media', [App\Http\Controllers\Admin\MediaController::class, 'index'])->name('media.index');
    Route::delete('/media/delete', [App\Http\Controllers\Admin\MediaController::class, 'delete'])->name('media.delete');
});

// Admin routes group example
Route::prefix('admin')->name('admin.')->group(function () {
    // ... other admin routes
    Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('settings.update');
});
