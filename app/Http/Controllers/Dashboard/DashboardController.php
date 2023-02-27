<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Payment;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index() {
        $payments = Payment::all();
        $news = News::all();
        return view('dashboard.index', ['payments' => $payments]);
    }


}
