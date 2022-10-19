<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['unauthed']], function () {
Route::post('login', [App\Http\Controllers\CustomAuthController::class, 'login'])->name('login');
Route::post('register', [App\Http\Controllers\CustomAuthController::class, 'register'])->name('register');
Route::get('r_login', [App\Http\Controllers\CustomAuthController::class, 'r_login'])->name('r_login');
Route::get('r_register', [App\Http\Controllers\CustomAuthController::class, 'r_register'])->name('r_register');
});
Route::get('afterregister', function () {
    return view('auth.afterregister');
})->name('afterregister');
Route::group(['middleware' => ['authed']], function () {
    
    Route::get('blocked', function () {
        return view('auth.blocked');
    })->name('blocked');
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('gps', [App\Http\Controllers\gpsController::class, 'index'])->name('gps.index');
    Route::get('logout', [App\Http\Controllers\CustomAuthController::class, 'logout']);
    Route::get('devices', [App\Http\Controllers\deviceController::class, 'index']);
    Route::put('editdevice/{id}', [App\Http\Controllers\deviceController::class, 'update']);
});


Route::group(['middleware' => ['isAdmin']], function () {
    Route::get('nodered', [App\Http\Controllers\noderedController::class, 'nodered']);
    Route::get('user', [App\Http\Controllers\userController::class, 'index']);
});
