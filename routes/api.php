<?php

use App\Http\Controllers\provinsi;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/provinsi', [provinsi::class, 'provinsi']);
Route::get('/kota_kab/{id}', [provinsi::class, 'kota_kab']);
Route::get('/kecamatan/{id}', [provinsi::class, 'kecamatan']);
Route::get('/kel_desa/{id}', [provinsi::class, 'kel_desa']);
