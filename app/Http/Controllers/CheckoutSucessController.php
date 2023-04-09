<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutSucessController extends Controller
{
    public function checkoutSucess (){
        return view('pages.checkout-sucess');
    }
}
