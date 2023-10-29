<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RecoverPasswordController;

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
})->middleware('auth:admin')->name('index');

Route::name('login.')->prefix('login')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/', 'index')->name('index')->middleware('guest:admin'); // view index
        Route::post('/', 'login')->name('entry')->middleware('guest:admin'); // process login
    });

    Route::controller(RecoverPasswordController::class)->group(function () {
        Route::get('/recover-password', 'index')->name('recover.password'); // process login
        Route::post('/recover-password', 'process')->name('process.password'); // process login
        Route::get('/recover-password/{token}', 'show')->name('recover.token'); // process login
        Route::post('/recover-password/store', 'changePassword')->name('recover.changePassword'); // process login
    });
});
