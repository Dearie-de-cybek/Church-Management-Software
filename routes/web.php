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
use App\Http\Controllers\DevotionalController;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\UserController;
use App\Models\Devotional;
use App\Models\Prayer;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', [DashboardController::class, 'home'])->name('home');

Route::middleware(['guest'])->group( function () {
    Route::get('church/admin/login', [UserController::class, 'loginPage'])->name('login');
    // Route::post('church/admin/login', [UserController::class, 'login'])->name('loginUser');
    // Route::get('church/admin/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('church/admin/login', [AuthenticatedSessionController::class, 'store'])->name('loginUser');
    Route::post('register', [UserController::class, 'store'])->name('register');
});

Route::middleware('auth')->group(function () {


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
            Route::get('edit-event/{id}', [EventController::class, 'edit'])->name('edit-event');
            Route::post('edit-event/{id}', [EventController::class, 'update'])->name('update-event');
            Route::get('{id}', [EventController::class, 'destroy'])->name('delete-event');

        });

        Route::name('event-category.')->prefix('event-category')->group(function() {
            Route::get('', [EventCategoryController::class, 'index'])->name('index');
            Route::get('add-event-category', [EventCategoryController::class, 'create'])->name('eventCategory');
            Route::post('eventCategory', [EventCategoryController::class, 'store'])->name('eventCategories');
            Route::get('edit-event-category/{id}', [EventCategoryController::class, 'edit'])->name('edit-event-category');
            Route::post('edit-event-category/{id}', [EventCategoryController::class, 'update'])->name('update-event-category');
            Route::get('{id}', [EventCategoryController::class, 'destroy'])->name('delete-event');
        });

        Route::name('payment.')->prefix('payment')->group(function() {
            Route::get('', [DashboardController::class, 'payment'])->name('index');
            Route::get('offering', [DashboardController::class, 'offering'])->name('offering');
            Route::get('tithe', [DashboardController::class, 'tithe'])->name('tithe');
            Route::get('church-project', [DashboardController::class, 'churchProject'])->name('church-project');
            Route::get('prophetic-seed', [DashboardController::class, 'propheticSeed'])->name('prophetic-seed');
        });

        Route::name('devotion.')->prefix('devotion')->group(function() {
            Route::get('', [DevotionalController::class, 'index'])->name('index');
            Route::get('add-devotion', [DevotionalController::class, 'create'])->name('add-devotion');
            Route::post('devotion', [DevotionalController::class, 'store'])->name('devotion');
            Route::get('edit-devotion/{id}', [DevotionalController::class, 'edit'])->name('edit-devotion');
            Route::post('edit-devotion/{id}', [DevotionalController::class, 'update'])->name('update-devotion');
            Route::get('{id}', [DevotionalController::class, 'destroy'])->name('delete-devotion');
        });

        Route::name('prayer.')->prefix('prayer')->group(function() {
            Route::get('', [PrayerController::class, 'index'])->name('index');
            Route::get('add-prayer', [PrayerController::class, 'create'])->name('add-prayer');
            Route::post('prayer', [PrayerController::class, 'store'])->name('prayer');
            Route::get('edit-prayer/{id}', [PrayerController::class, 'edit'])->name('edit-prayer');
            Route::post('edit-prayer/{id}', [PrayerController::class, 'update'])->name('update-prayer');
            Route::get('{id}', [PrayerController::class, 'destroy'])->name('delete-prayer');
        });

    });

    Route::name('user.')->prefix('user')->group(function() {
        Route::get('payment', [PaymentController::class, 'create'])->name('payment');
        Route::post('payment', [PaymentController::class, 'store'])->name('pay');

        Route::get('appointment', [AppointmentController::class, 'create'])->name('appointment');
        Route::post('appointment', [AppointmentController::class, 'store'])->name('appointments');
    });
});
