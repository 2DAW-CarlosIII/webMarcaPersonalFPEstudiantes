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

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::prefix('proyectos')->group(function () {
    Route::get('/', function() {
        return view('proyectos.index');
        });

    Route::get('show/{id}', function ($id) {
        return view('proyectos.show', array('id'=>$id));
        });

    Route::get('create', function() {
        return view('proyectos.create');
    });

    Route::get('edit/{id}', function ($id) {
        return view('proyectos.edit', array('id'=>$id));
    });
});
