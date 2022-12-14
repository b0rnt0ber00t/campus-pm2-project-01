<?php

use Illuminate\Support\Facades\Route;
use Modules\UserManagement\app\Http\Controllers\User\UserProfileController;
use Modules\UserManagement\app\Http\Controllers\UserManagementController;
use Modules\UserManagement\app\Http\Controllers\ValidationController;

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

Route::resource('user', UserManagementController::class)->only('index', 'store', 'update', 'destroy');
Route::prefix('user')->name('user.')->group(function () {
  Route::resource('profile', UserProfileController::class)->only('index');
  Route::resource('validation', ValidationController::class)->only('index', 'store', 'update', 'destroy');
});
