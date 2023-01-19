<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function(){
    Route::get('students',[StudentController::class,'showAllData']);
    Route::post('students',[StudentController::class,'storeData']);
    Route::get('students/{id}',[StudentController::class,'showOneData']);
    Route::delete('students/{id}',[StudentController::class,'deleteData']);
    Route::put('students/{id}',[StudentController::class,'updateData']);
});

Route::post('/login',[AuthController::class,'login']);
