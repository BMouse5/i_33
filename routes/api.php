<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\GanttController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LinkController;
=======

>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
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
    return $request->user();
});
<<<<<<< HEAD


Route::get('/data', [GanttController::class ,'get']); 


Route::resource('task', TaskController::class);
Route::resource('link', LinkController::class);

=======
>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
