<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SermonController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\Dashboard\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::name('dashboard.')->prefix('dashboard')->group(function() {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('approve/{id}', [PaymentController::class, 'approve'] )->name('approve');
    Route::get('decline/{id}', [PaymentController::class, 'decline'] )->name('decline');


    Route::get('news', [NewsController::class, 'create'])->name('news');
    Route::post('news', [NewsController::class, 'store'])->name('new');

    Route::get('sermon', [SermonController::class, 'create'])->name('sermon');
    Route::post('sermon', [SermonController::class, 'store'])->name('sermons');

    Route::get('event', [EventController::class, 'create'])->name('event');
    Route::post('event', [EventController::class, 'store'])->name('events');

    Route::get('eventCategory', [EventCategoryController::class, 'create'])->name('eventCategory');
    Route::post('eventCategory', [EventCategoryController::class, 'store'])->name('eventCategories');


});

Route::name('user.')->prefix('dashboard')->group(function() {
    Route::get('payment', [PaymentController::class, 'create'])->name('payment');
    Route::post('payment', [PaymentController::class, 'store'])->name('pay');

});
