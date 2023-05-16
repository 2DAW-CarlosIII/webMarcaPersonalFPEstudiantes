<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
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

Route::get('/',  [HomeController::class, 'getHome']);

Route::get('login', function () {
    return view('auth.login');
});

Route::prefix('proyectos')->group(function () {
    Route::get('/', [ProyectoController::class, 'getIndex']);
    Route::get('show/{id}', [ProyectoController::class, 'getShow']);

    Route::get('create', [ProyectoController::class, 'getCreate']);
    Route::post('create',[ProyectoController::class, 'store']);
    Route::get('edit/{id}', [ProyectoController::class, 'getEdit']);
    Route::put('edit/{id}', [ProyectoController::class, 'putStore']);
});

Route::get('/search/', [ProyectoController::class, 'getSearch'])->name('search');
