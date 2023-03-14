<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Payment;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EventCategory;

class DashboardController extends Controller
{
    //
    public function index() {
        $payments = Payment::all();
        $categories = EventCategory::all();
        $news = News::all();
        return view('dashboard.index', ['payments' => $payments], ['categories' => $categories], ['news' => $news]);
    }


}
