<?php

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

Route::post('/login',[\App\Http\Controllers\Api::class,'checkAccount']);

Route::get('/getfrontmenu',[\App\Http\Controllers\Api::class,'getFrontMenu']);
Route::post('/getmenu',[\App\Http\Controllers\Api::class,'getMenu']);
Route::post('/getchildmenu',[\App\Http\Controllers\Api::class,'getChildMenu']);
Route::post('/getlaporanmenu',[\App\Http\Controllers\Api::class,'getLaporanMenu']);

Route::post('/postLaporan',[\App\Http\Controllers\Api::class,'postLaporan']);

Route::post('/createPelaporan',[\App\Http\Controllers\Api::class,'createPelaporan']);
Route::post('/laporanBatch',[\App\Http\Controllers\Api::class,'laporanBatch']);

Route::post('/getLaporan',[\App\Http\Controllers\Api::class,'getLaporan']);
