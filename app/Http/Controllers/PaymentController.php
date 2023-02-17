<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function approved($id){
        $process = payments::find($id); 

        $process->status = 'approved';

        $process->save();

        return redirect()->back();
    }
}
