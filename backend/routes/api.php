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

// /api/直下はcorsヘッダを付属しないので注意
//
//Route::get('/', function () {
//   return 'Hello';
//});
Route::get('/hello', function () {
   return 'hello';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
