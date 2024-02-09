<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\ServantsController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

    // AUTH
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
        // AUTH_CONTROLLER
    Route::apiResource('auth', AuthController::class);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::put('mode/{id}', [AuthController::class, 'theme']);

        // USER_CONTROLLER
    Route::apiResource('users', UserController::class);

        // CATEGORY_CONTROLLER
    Route::apiResource('categories', CategoryController::class);

        // SERVANTS_CONTROLLER
    Route::apiResource('servants', ServantsController::class);
    Route::post('servants/search', [ServantsController::class, 'search']);

        // ACCESS_CONTROLLER
    Route::apiResource('accesses', AccessController::class);
});