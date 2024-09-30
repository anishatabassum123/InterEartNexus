<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ContinentFactorController;
use App\Http\Controllers\EarthFactorController;
use App\Http\Controllers\FactorSearchController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserSearchController;
use App\Http\Controllers\WeatherSearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->middleware('guest')->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->middleware('guest')->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->middleware('guest')->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->middleware('guest')->name('password.update');

Route::get('/', function () {
    return view('home');
});
Route::middleware('auth')->group(function () {
    Route::post('/logout', [SessionController::class, 'destroy']);

    // User management routes
    Route::get('/user', [RegisteredUserController::class, 'index']);
    Route::get('/user/{user}/edit', [RegisteredUserController::class, 'edit'])->name('user.edit');
    Route::patch('/user/{user}', [RegisteredUserController::class, 'update'])->name('user.update');
    Route::get('/user/{user}', [RegisteredUserController::class, 'show'])->name('user.show');
    Route::delete('/user/{user}', [RegisteredUserController::class, 'destroy'])->name('user.delete');
    Route::get('/deactive/{user}', [RegisteredUserController::class, 'deactive'])->name('user.deactive');
    Route::get('/active/{user}', [RegisteredUserController::class, 'active'])->name('user.active');
    Route::get('/users/search', UserSearchController::class)->name('users.search');
    // EarthFactor management routes
    Route::get('/factor', [EarthFactorController::class, 'index']);
    Route::get('/factor/create', [EarthFactorController::class, 'create'])->name('factor.create');
    Route::post('/factor', [EarthFactorController::class, 'store']);
    Route::get('/factor/{factor}/edit', [EarthFactorController::class, 'edit'])->name('factor.edit');
    Route::patch('/factor/{factor}', [EarthFactorController::class, 'update'])->name('factor.update');
    Route::get('/factor/{factor}', [EarthFactorController::class, 'show'])->name('factor.show');
    Route::delete('/factor/{factor}', [EarthFactorController::class, 'destroy'])->name('factor.delete');
    // Continent EarthFactor management routes
    Route::get('/continent_factor', [ContinentFactorController::class, 'index']);
    Route::get('/continent_factor/create', [ContinentFactorController::class, 'create'])->name('factor.create');
    Route::post('/continent_factor', [ContinentFactorController::class, 'store']);
    Route::get('/continent_factor/{con_factor}/edit', [ContinentFactorController::class, 'edit'])->name('factor.edit');
    Route::patch('/continent_factor/{factor}', [ContinentFactorController::class, 'update'])->name('factor.update');
    Route::get('/continent_factor/{factor}', [ContinentFactorController::class, 'show'])->name('factor.show');
    Route::delete('/continent_factor/{factor}', [ContinentFactorController::class, 'destroy'])->name('factor.delete');
});
Route::get('/continent/{code}', [ContinentFactorController::class, 'showContinent'])->name('factor.show');
Route::get('/continent-factor/{factor}/{continent}', [ContinentFactorController::class, 'showContinentFactor'])->name('continent-factor.get');
Route::get('/weathersearch', WeatherSearchController::class)->name('weathersearch');
Route::get('/factor-search', FactorSearchController::class)->name('factor.search');
Route::view('/video', 'video');
