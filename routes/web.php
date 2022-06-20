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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])->name('setting');
// Route::post('/settings', [App\Http\Controllers\SettingController::class, 'update']);

Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])
    ->name('dashboard-settings-account');
Route::post('/settings/{redirect}', [App\Http\Controllers\SettingController::class, 'update'])
    ->name('dashboard-settings-redirect');
