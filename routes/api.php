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
    Route::post('/editprofile/{id}', [Apis::class, 'editProfile']);
    Route::post('make-payment', [Apis::class, 'makePayment']);
});

Route::get('events', [Apis::class, 'events']);
Route::get('news', [Apis::class, 'news']);

Route::name('devotionals.')->prefix('devotionals')->group(function(){
    Route::get('', [Apis::class, 'devotionals']);
    Route::get('Monday', [Apis::class, 'devotionalsMonday']);
    Route::get('Tuesday', [Apis::class, 'devotionalsTuesday']);
    Route::get('Wednesday', [Apis::class, 'devotionalsWednesday']);
    Route::get('Thursday', [Apis::class, 'devotionalsThursday']);
    Route::get('Friday', [Apis::class, 'devotionalsFriday']);
    Route::get('Saturday', [Apis::class, 'devotionalsSaturday']);
});

Route::get('prayers', [Apis::class, 'prayers']);
Route::post('/register', [Apis::class, 'createUser']);
Route::post('/login', [Apis::class, 'loginUser']);
