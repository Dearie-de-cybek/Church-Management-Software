<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // 
    public function index() {
        $payments = Payment::all();
        return view('dashboard.index', ['payments' => $payments]);
    }

    
}
