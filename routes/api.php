<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProyectoController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ProyectoUserController;
use App\Http\Controllers\API\TokenController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Psr\Http\Message\ServerRequestInterface;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;
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
Route::middleware('auth:sanctum')->get('/logout', [AuthenticatedSessionController::class, 'destroy']);
route::get('teachers', [UserController::class, 'getTeachers']);
route::get('students', [UserController::class, 'getStudents']);
Route::apiResource('users', UserController::class);
Route::apiResource('proyectouser', ProyectoUserController::class);
route::post('proyectos/{id}/attach', [ProyectoController::class, 'attachEstudiantes']);
route::delete('proyectos/{id}/detach', [ProyectoController::class, 'detachEstudiantes']);
Route::apiResource('proyectos', ProyectoController::class);

// emite un nuevo token
Route::post('tokens', [TokenController::class, 'store']);
// elimina el token del usuario autenticado
Route::delete('tokens', [TokenController::class, 'destroy'])->middleware('auth:sanctum');

Route::any('/{any}', function (ServerRequestInterface $request) {
    $config = new Config([
        'address' => env('DB_HOST', '127.0.0.1'),
        'database' => env('DB_DATABASE', 'forge'),
        'username' => env('DB_USERNAME', 'forge'),
        'password' => env('DB_PASSWORD', ''),
        'basePath' => '/api',
    ]);
    $api = new Api($config);
    $response = $api->handle($request);

    try {
        $records = json_decode($response->getBody()->getContents())->records;
        $response = response()->json($records, 200, $headers = ['X-Total-Count' => count($records)]);
    } catch (\Throwable $th) {

    }
    return $response;

})->where('any', '.*');
