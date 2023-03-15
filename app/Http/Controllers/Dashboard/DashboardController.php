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

    public function payment() {
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');

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


        return view('dashboard.payment.index', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds'));
    }
    public function offering() {
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');

        return view('dashboard.payment.offering', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds'));
    }

    public function tithe() {
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');

        return view('dashboard.payment.tithe', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds'));
    }

    public function churchProject() {
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');

        return view('dashboard.payment.churchProject', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds'));
    }

    public function propheticSeed() {
        $payments = Payment::all();
        $offerings = Payment::all('payment', 'amount', 'status')->where('payment', 'Offering')->where('status', 'Approved')->sum('amount');
        $tithes = Payment::all('payment', 'amount', 'status')->where('payment', 'Tithe')->where('status', 'Approved')->sum('amount');
        $churchProjects = Payment::all('payment', 'amount', 'status')->where('payment', 'Church Project')->where('status', 'Approved')->sum('amount');
        $propheticSeeds = Payment::all('payment', 'amount', 'status')->where('payment', 'Prophetic Seed')->where('status', 'Approved')->sum('amount');

        return view('dashboard.payment.propheticSeed', compact('payments','offerings', 'tithes', 'churchProjects', 'propheticSeeds'));
    }


}

