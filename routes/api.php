<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProyectoController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\TokenController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    $authenticatedUser = $request->user();
    $user['id'] = $authenticatedUser->id;
    $user['fullName'] = $authenticatedUser->first_name;
    $user['avatar'] = $authenticatedUser->avatar;
    return $user;
 });
Route::apiResource('users', UserController::class);
Route::apiResource('proyectos', ProyectoController::class);

// emite un nuevo token
Route::post('tokens', [TokenController::class, 'store']);
// elimina el token del usuario autenticado
Route::delete('tokens', [TokenController::class, 'destroy'])->middleware('auth:sanctum');
