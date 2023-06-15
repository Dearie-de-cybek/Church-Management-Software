<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Apis;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

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

Route::middleware('auth:sanctum')->group(function(){
    Route::get('transaction', [Apis::class, 'transactionHistory']);
});

Route::post('/register', [Apis::class, 'createUser']);
Route::post('/login', [Apis::class, 'loginUser']);
Route::post('/editprofile/{id}', [Apis::class, 'editProfile']);
