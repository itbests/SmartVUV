<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\OperatingUnitController;

Route::get('LoginOtherBrowser', [HomeController::class, 'LoginOtherBrowser']);
Route::get('LogoutByLoginOtherBrowser', [HomeController::class, 'LogoutByLoginOtherBrowser']);

Route::group(['middleware' => ['validateauthsession']], function () {
    Route::get('', [HomeController::class, 'index']);
    Route::get('dashboard', [HomeController::class, 'dashboard']);
    Route::resource('operatingUnit', OperatingUnitController::class);
    Route::get('operatingUnit.show/{id}', [OperatingUnitController::class, 'show'])->name('operatingUnit.show');
});
