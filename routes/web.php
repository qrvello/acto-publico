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

Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/usuario', [App\Http\Controllers\User\ProfileController::class, 'profile']);
    Route::get('/mis-participaciones', [App\Http\Controllers\User\ParticipationController::class, 'participations']);

    Route::post('/participacion/{publication_id}/postularse', [App\Http\Controllers\User\ParticipationController::class, 'store_participation']);
    Route::delete('/participacion/{publication_id}/desistir', [App\Http\Controllers\User\ParticipationController::class, 'destroy_participation']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
