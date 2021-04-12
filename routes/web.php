<?php

use HishabKitab\Engine\Http\Controllers\Authentication\AuthenticatedSessionController;
use HishabKitab\Engine\Http\Controllers\Authentication\ConfirmablePasswordController;
use HishabKitab\Engine\Http\Controllers\Authentication\EmailVerificationNotificationController;
use HishabKitab\Engine\Http\Controllers\Authentication\EmailVerificationPromptController;
use HishabKitab\Engine\Http\Controllers\Authentication\NewPasswordController;
use HishabKitab\Engine\Http\Controllers\Authentication\PasswordResetLinkController;
use HishabKitab\Engine\Http\Controllers\Authentication\RegisteredUserController;
use HishabKitab\Engine\Http\Controllers\Authentication\VerifyEmailController;
use HishabKitab\Engine\Http\Controllers\Authorization\PermissionsController;
use HishabKitab\Engine\Http\Controllers\Authorization\RolesAssignmentController;
use HishabKitab\Engine\Http\Controllers\Authorization\RolesController;
use HishabKitab\Engine\Http\Controllers\Configuration\CompanyController;
use HishabKitab\Site\Http\Controllers\SiteController;
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

/*************************************************** Entry Point ***************************************************/

Route::get('/', function () {
    return redirect()->route('site.home');
});

/*************************************************** Authentication ***************************************************/

Route::prefix('authentication')->middleware('web')
    ->group(function () {
        Route::get('register', [RegisteredUserController::class, 'create'])
            ->middleware('guest')
            ->name('register');

        Route::post('register', [RegisteredUserController::class, 'store'])
            ->middleware('guest');

        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->middleware(['guest'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store'])
            ->middleware('guest');

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->middleware('guest')
            ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->middleware('guest')
            ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->middleware('guest')
            ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->middleware('guest')
            ->name('password.update');

        Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
            ->middleware('auth')
            ->name('verification.notice');

        Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
            ->middleware(['auth', 'signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
            ->middleware(['auth', 'throttle:6,1'])
            ->name('verification.send');

        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
            ->middleware('auth')
            ->name('password.confirm');

        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store'])
            ->middleware('auth');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->middleware('auth')
            ->name('logout');
    });

/*************************************************** Authorization ****************************************************/

Route::prefix('authorization')->middleware('web')
    ->group(function () {
        Route::resource('permissions', PermissionsController::class)
            ->only(['index', 'edit', 'update']);

        Route::resource('roles', RolesController::class);

        Route::resource('roles-assignment', RolesAssignmentController::class)
            ->only(['index', 'edit', 'update']);
    });

/*************************************************** Configuration ****************************************************/

Route::prefix('configuration')->middleware(['web', 'auth'])
    ->group(function () {
        Route::get('company', [CompanyController::class, 'create'])
            ->name('config.company');

        Route::post('company', [CompanyController::class, 'store']);

        Route::resource('financial-accounts', CompanyController::class);
        Route::resource('localizations', CompanyController::class);
    });

Route::get('/support', [SiteController::class, 'index'])->name('support');