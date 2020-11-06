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

    Route::group(['middleware' => ['role:user'], 'middleware' => ['role:admin'] ], function () {
        Route::get('/usuario', [App\Http\Controllers\User\ProfileController::class, 'profile']);
        Route::get('/mis-participaciones', [App\Http\Controllers\User\ParticipationController::class, 'participations']);
        Route::get('/mis-datos', [App\Http\Controllers\User\ProfileController::class, 'data']);
        Route::put('/mis-datos/editar/{user}', [App\Http\Controllers\User\ProfileController::class, 'update']);
        
        Route::post('/participacion/{publication_id}/postularse', [App\Http\Controllers\User\ParticipationController::class, 'store_participation']);
        Route::delete('/participacion/{publication_id}/desistir', [App\Http\Controllers\User\ParticipationController::class, 'destroy_participation']);
    });
});

Route::group(['middleware' => ['role:admin']], function () {
    
    //rutas accesibles solo para administradores
    Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::get('/admin/publicaciones', [App\Http\Controllers\Admin\AdminController::class, 'publications']);
    Route::get('/admin/publicacion/editar/{publication}', [App\Http\Controllers\Admin\PublicationController::class, 'edit']);
    Route::put('/admin/publicacion/editar/{publication}', [App\Http\Controllers\Admin\PublicationController::class, 'update']);
    Route::get('/admin/publicacion/crear', [App\Http\Controllers\Admin\PublicationController::class, 'create']);
    Route::post('/admin/publicacion/crear', [App\Http\Controllers\Admin\PublicationController::class, 'store']);
    Route::delete('/admin/publicacion/borrar/{publication}', [App\Http\Controllers\Admin\PublicationController::class, 'destroy']);
    Route::get('/admin/usuarios', [App\Http\Controllers\Admin\AdminController::class, 'users']);
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
