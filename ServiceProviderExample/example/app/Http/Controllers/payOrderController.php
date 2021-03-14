<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\billing\paymentGateWay;

class payOrderController extends Controller
{
    public function store(paymentGateWay $PaymentGateWay){
      
        $final = $PaymentGateWay->charge(200);

        var_dump($final);

        return view('payments');
        
    }


}
