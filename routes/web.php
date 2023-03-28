<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\News;
use App\Models\Event;
use App\Models\Payment;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SermonController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;

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

Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('register', [UserController::class, 'store'])->name('register');

Route::name('dashboard.')->prefix('dashboard')->group(function() {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('approve/{id}', [PaymentController::class, 'approve'] )->name('approve');
    Route::get('decline/{id}', [PaymentController::class, 'decline'] )->name('decline');

    Route::name('sermon.')->prefix('sermon')->group(function() {
        Route::get('', [SermonController::class, 'index'])->name('index');
        Route::get('create-sermon', [SermonController::class, 'create'])->name('create-sermon');
        Route::post('sermon', [SermonController::class, 'store'])->name('sermons');
    });

    Route::name('news.')->prefix('news')->group(function() {
        Route::get('', [NewsController::class, 'index'])->name('index');
        Route::get('add-news', [NewsController::class, 'create'])->name('add-news');
        Route::post('news', [NewsController::class, 'store'])->name('news');
        Route::get('edit-news/{id}', [NewsController::class, 'edit'])->name('edit-news');
        Route::post('edit-news/{id}', [NewsController::class, 'update'])->name('update-news');
        Route::get('{id}', [NewsController::class, 'destroy'])->name('delete-news');
    });

    Route::name('event.')->prefix('event')->group(function() {
        Route::get('', [EventController::class, 'index'])->name('index');
        Route::get('add-event', [EventController::class, 'create'])->name('add-event');
        Route::post('event', [EventController::class, 'store'])->name('events');

        Route::get('eventCategory', [EventCategoryController::class, 'create'])->name('eventCategory');
        Route::post('eventCategory', [EventCategoryController::class, 'store'])->name('eventCategories');
    });

    Route::name('payment.')->prefix('payment')->group(function() {
        Route::get('', [DashboardController::class, 'payment'])->name('index');
        Route::get('offering', [DashboardController::class, 'offering'])->name('offering');
        Route::get('tithe', [DashboardController::class, 'tithe'])->name('tithe');
        Route::get('church-project', [DashboardController::class, 'churchProject'])->name('church-project');
        Route::get('prophetic-seed', [DashboardController::class, 'propheticSeed'])->name('prophetic-seed');
    });

});

Route::name('user.')->prefix('user')->group(function() {
    Route::get('payment', [PaymentController::class, 'create'])->name('payment');
    Route::post('payment', [PaymentController::class, 'store'])->name('pay');

    Route::get('appointment', [AppointmentController::class, 'create'])->name('appointment');
    Route::post('appointment', [AppointmentController::class, 'store'])->name('appointments');
});
