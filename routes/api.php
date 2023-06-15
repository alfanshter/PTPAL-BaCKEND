<?php

use App\Http\Controllers\CheckPlatController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/profil', [UserController::class, 'profil']);

//Plat
Route::get('/plat', [PlatController::class, 'index']);
Route::get('/detailplat', [PlatController::class, 'detailplat']);
Route::get('/getabsensi', [PlatController::class, 'getabsensi']);
Route::post('/postplat', [PlatController::class, 'store']);
Route::post('/updateplat', [PlatController::class, 'update']);
Route::post('/qrcode', [PlatController::class, 'qrcode']);
Route::post('/hapusplat', [PlatController::class, 'delete']);
Route::get('/exportexcel', [PlatController::class, 'exportexcel']);

//Check
Route::post('/checkplat', [CheckPlatController::class, 'checkplat']);
