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
use App\Http\Controllers\Frontend\CreationController as FrontendCreationController;
use App\Http\Controllers\Frontend\InfoController as FrontendInfoController;
use App\Http\Controllers\Frontend\InternController;
use App\Http\Controllers\Frontend\SmartController;
use App\Http\Controllers\Frontend\StoreController as FrontendStoreController;

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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/info', [FrontendInfoController::class, 'index'])->name('info');
Route::get('/info/{info}', [FrontendInfoController::class, 'show'])->name('show-info');
Route::get('/intern', [InternController::class, 'index'])->name('intern');
Route::get('/intern/{info}', [InternController::class, 'show'])->name('show-intern');
Route::get('/smart', [SmartController::class, 'index'])->name('smart');
Route::get('/smart/{info}', [SmartController::class, 'show'])->name('show-smart');
Route::get('/store', [FrontendStoreController::class, 'index'])->name('store');
Route::get('/creation', [FrontendCreationController::class, 'index'])->name('creation');


// About
Route::get("about", function () {
  return view("pages.frontend.about");
});

Route::group(["middleware" => ["auth:sanctum", "verified"]], function () {
  Route::name("dashboard.")
    ->prefix("dashboard")
    ->group(function () {
      Route::get("/", [DashboardController::class, "index"])->name("index");
      Route::resource("store", StoreController::class);
      Route::resource("advice", AdviceController::class);
      Route::resource("department", DepartmentController::class);
      Route::resource("creation", CreationController::class);
      Route::resource("info", InfoController::class);
      Route::resource("documentation", DocumentationController::class);
      Route::resource("utils", UtilsController::class);
    });
});

require __DIR__ . "/auth.php";
