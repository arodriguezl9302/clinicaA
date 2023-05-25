<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\TestsController;
use Illuminate\Support\Facades\Route;
use App\Mail\Verification;

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

Route::get('/lolo', function () {
    return new Verification("Alejandro", "http://www.lolo.com");
});

Route::get('/', function () {
    return redirect(route('auth.showLogin'));
});

Route::middleware('guest')->name('auth.')->prefix('auth')->group(function () {
    Route::get('/', [AuthController::class, 'getLogin'])->name('showLogin');
    Route::post('/apiLogin', [AuthController::class, 'postApilogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/verify/{id}/{token}', [AuthController::class, 'getVerify'])->name('showVerify');
    Route::put('/verify', [AuthController::class, 'postVerify'])->name('verify');
    Route::get('/forgot-password', [AuthController::class, 'getForgotPassword'])->name('showForgotPassword');
    Route::post('/forgot-password', [AuthController::class, 'postforgotPassword'])->name('forgotPassword');
    Route::get('/recovery-password/{id}/{token}', [AuthController::class, 'getRecoveryPassword'])->name('showRecoveryPassword');
    Route::put('/recovery-password', [AuthController::class, 'postRecoveryPassword'])->name('recoveryPassword');
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('patients')->name('patients.')->group(function () {
        Route::get('/', [PatientsController::class, 'index'])->name('index');
        Route::get('/{id}', [PatientsController::class, 'edit'])->name('edit');
    });

    Route::prefix('appointments')->name('appointments.')->group(function () {
        Route::get('/', [AppointmentsController::class, 'index'])->name('index');
        Route::get('/{id}', [AppointmentsController::class, 'edit'])->name('edit');
    });

    Route::prefix('tests')->name('tests.')->group(function () {
        Route::get('/', [TestsController::class, 'index'])->name('index');
        Route::get('/{id}', [TestsController::class, 'edit'])->name('edit');
    });
});

