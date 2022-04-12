<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppSettingController;
use App\Http\Controllers\RegulationsController;

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

Route::get('/',[IndexController::class,'index']);
Route::post('/',[IndexController::class,'store']);

// Admin Page 
Route::get('/admin', function () {
    return redirect()->action([AdminController::class, 'index']);
});

Auth::routes();

Route::get('/admin/home', [AdminController::class, 'index'])->name('home');
Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/promo', [PromoController::class, 'index'])->name('promos.index');
Route::get('/admin/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/admin/app_settings', [AppSettingController::class, 'index'])->name('app_setting.index');
Route::get('/admin/regulations', [RegulationsController::class, 'index'])->name('app_setting.index');

// Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');
Route::resource('users', UsersController::class);
Route::resource('promo', PromoController::class);
Route::resource('service', ServiceController::class);
Route::resource('app_setting', AppSettingController::class);
Route::resource('regulations', RegulationsController::class);

Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::post('/appsetting/update/{id}', [AppSettingController::class, 'update']); //route untuk mengupdate data ke database
Route::post('/regulation/update/{id}', [RegulationsController::class, 'update']); //route untuk mengupdate data ke database

Route::get('/promo/edit/{id}', [PromoController::class, 'edit']);
Route::post('/promo/update/{id}', [PromoController::class, 'update']);

Route::get('/service/edit/{id}', [ServiceController::class, 'edit']);
Route::post('/service/update/{id}', [ServiceController::class, 'update']);
