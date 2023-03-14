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

    public function chart() {
        $payments = Payment::all('amount');
        $offerings = Payment::all('payment', 'amount')->where('payment', 'Offering')->sum('amount');
        $tithes = Payment::all('payment', 'amount')->where('payment', 'Tithe')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount')->where('payment', 'Church Project')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount')->where('payment', 'Prophetic Seed')->sum('amount');

        $myArray = array('apple', 'banana', 'orange', '700');
        $lastItem = '';
        $totalItems = count($myArray);
        $i = 0;

        foreach ($myArray as $item) {
            $lastItem = $item;
            if (++$i === $totalItems) {
                // This is the last iteration
                // Do any additional processing here
            }
        }

        echo $lastItem; // Outputs "orange"


        return view('dashboard.chart', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds'));
    }
}
