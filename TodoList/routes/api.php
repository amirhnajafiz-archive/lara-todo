<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('todos', [TodoController::class, 'index']);

Route::post('todo/store', [TodoController::class, 'store']);

Route::post('todo/update/{id}', [TodoController::class, 'update']);

Route::get('todo/delete/{id}', [TodoController::class, 'destroy']);