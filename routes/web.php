<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', 'Auth\LoginController@showLoginForm');

// Sign in
Route::get('/sign-in', 'Auth\LoginController@showLoginForm')->name('sign_in');

// Sign up
Route::get('/sign-up', function () {
    return view('auth.sign-up');
});

// Forgot password
Route::get('/forgot-password', 'Auth\AuthController@forgotPassword')->name('password.request');

// Send password reset link
Route::post('/forgot-password', 'Auth\AuthController@sendPasswordResetLink')->middleware('guest')->name('password.email');

// Show password reset
Route::get('/reset-password/{token}', 'Auth\AuthController@resetPassword')->middleware('guest')->name('password.reset');

// Reset password
Route::post('/reset-password', 'Auth\AuthController@updateResetPassword')->middleware('guest')->name('password.update');

// Auth
Auth::routes(['register' => false, 'reset' => false]);

// Show email verify form
Route::get('/email/verify', 'Auth\VerificationController@show')->middleware('auth')->name('verification.notice');

// Check email verify
Route::get('/email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->middleware(['auth', 'signed'])->name('verification.verify');

// resend email verification link
Route::post('/email/verification-notification', 'Auth\VerificationController@resend')->middleware(['auth', 'throttle:6,1'])->name('verification.resend');


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
| This section contains routes dedicated to authentication and is accessible
| exclusively to authorized users. These routes are loaded by the RouteServiceProvider
| and are assigned to the "web" middleware group. Let's build something amazing!
|
*/

Route::group(['middleware' => ['auth', 'verified']], function () {


    //Show 2FA Verify form
    Route::get('2fa-verify', 'Auth\TwoFAController@index')->name('2fa.index');

    //2FA Verify
    Route::post('2fa-verify', 'Auth\TwoFAController@store')->name('2fa.verify_code');

    //2FA code resend
    Route::get('2fa/reset', 'Auth\TwoFAController@resend')->name('2fa.resend');

    // 2FA update status
    Route::get('/2fa/status/{status}', 'Auth\Google2FAController@update2faEmailStatus')->name('2fa.update_status');
});

Route::group(['middleware' => ['auth', 'verified', '2fa.verified', 'google2fa.verified']], function () {

    //Show google 2FA Verify form
    Route::post('/google2fa/verify', 'Auth\Google2FAController@verfy2FA')->name('google2fa.verify');

    // Google 2FA show form
    Route::get('/google2fa/show', 'Auth\Google2FAController@show2faForm')->name('google2fa.show');

    // Google 2FA generate secret key
    Route::post('/google2fa/generate-secret', 'Auth\Google2FAController@generate2faSecret')->name('google2fa.generate_secret');

    // Google 2FA enable
    Route::post('/google2fa/enable', 'Auth\Google2FAController@enable2fa')->name('google2fa.enable');

    //Google 2FA disable
    Route::post('/google2fa/disable', 'Auth\Google2FAController@disable2fa')->name('google2fa.disable');

    // Account General
    Route::get('/account-general', 'Auth\AuthController@index')->name('auth.account_general');

    // Change Password
    Route::get('/change-password', 'Auth\AuthController@changePassword')->name('auth.change_password');

    // Update Password
    Route::post('/change-password', 'Auth\AuthController@updatePassword')->name('auth.update_password');

    // Account security
    Route::get('/account-security', 'Auth\AuthController@accountSecurity')->name('auth.account_security');

    // Logout Devices
    Route::get('logout-device/{id}', 'Auth\AuthController@logoutDevices')->name('auth.logout_devices');

    // Logout other devices show form
    Route::get('logout-other-device', 'Auth\AuthController@logoutOtherDevicesForm')->name('auth.logout_other_devices_show');

    // Logout  other devices
    Route::post('logout-other-device', 'Auth\AuthController@logoutOtherDevices')->name('auth.logout_other_devices');

    // Dashboard
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    // Skyline User
    Route::resource('skyline-users', SkylineUserController::class);

    // Delete Bulk Activity logs
    Route::post('/skyline-users/destroy-all', 'SkylineUserController@deleteAll')->name('skyline_users.destroy.all');

    // Vortexes
    Route::resource('vortexes', VortexController::class);

    // Data guards
    Route::resource('data-guards', DataGuardController::class);

    // Managed IT
    Route::resource('managed-its', ManagedItController::class);

    // Voices
    Route::resource('voices', VoiceController::class);

    // Internet Backup
    Route::resource('internet-backups', InternetBackupController::class);

    // Slipstream
    Route::resource('slipstreams', SlipstreamController::class);

    // Scouts
    Route::resource('scouts', ScoutController::class);

    // Sentry
    Route::resource('sentries', SentryController::class);

    // Sentinels
    Route::resource('sentinels', SentinelController::class);

    // Active Tracks
    Route::resource('active-tracks', ActiveTrackController::class);

    // Citadels
    Route::resource('citadels', CitadelController::class);

    // Websites
    Route::resource('websites', WebsiteController::class);

    // Web Applications
    Route::resource('web-applications', WebApplicationController::class);

    // Mobile Apps
    Route::resource('mobile-apps', MobileAppController::class);

    // Digital Marketing
    Route::resource('digital-marketings', DigitalMarketingController::class);

    // Engage
    Route::resource('engages', EngageController::class);

    // Activity logs
    Route::get('/activity-logs', 'ActivityLogController@index')->name('activity_logs.index');

    // Your Activity logs
    Route::get('/your-activity-logs', 'ActivityLogController@yourActivityLog')->name('activity_logs.your_activity_log');

    // Delete Activity logs
    Route::delete('/activity-logs/{id} ', 'ActivityLogController@destroy')->name('activity_logs.destroy');

    // Delete Bulk Activity logs
    Route::post('/activity-logs/destroy-all', 'ActivityLogController@deleteAll')->name('activity_logs.destroy.all');

    // Activity logs deleted history
    Route::get('/activity-logs/delete-history', 'ActivityLogController@onlyTrashed')->name('activity_logs.delete.history');

    // Activity logs force deleted history
    Route::delete('/activity-logs/force-delete/{id}', 'ActivityLogController@forceDelete')->name('activity_logs.force_delete');

    // Activity logs bulk force deleted history
    Route::post('/activity-logs/force-delete-all', 'ActivityLogController@forceDeleteAll')->name('activity_logs.force_delete_all');

    // Activity logs restore
    Route::put('/activity-logs/restore/{id}', 'ActivityLogController@restore')->name('activity_logs.history.restore');

    // Activity logs bulk restore
    Route::post('/activity-logs/restore-all', 'ActivityLogController@restoreAll')->name('activity_logs.history.restore_all');
});
