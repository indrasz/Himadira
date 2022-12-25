<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\UtilsController;
use App\Http\Controllers\Admin\AdviceController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\CreationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DocumentationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::middleware(['auth', 'admin'])->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::resource('store', StoreController::class);
            Route::resource('advice', AdviceController::class);
            Route::resource('department', DepartmentController::class);
            Route::resource('creation', CreationController::class);
            Route::resource('info', InfoController::class);
            Route::resource('documentation', DocumentationController::class);
            Route::resource('utils', UtilsController::class);
        });
    });
});

require __DIR__.'/auth.php';
