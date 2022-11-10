<?php

namespace App\Http\Controllers;

use KiplingKelvin\ChpterPhpSdk\Chpter;

class ChpterController extends Controller
{

    public function chpter_mpesa_payment($customer, $products, $amount, $callback_details)
    {
        return Chpter::mpesaPayment($customer, $products, $amount, $callback_details);
    }

    public function chpter_card_payment($customer, $products, $amount,$card_details, $callback_details)
    {
        return Chpter::cardPayment($customer, $products, $amount,$card_details, $callback_details);
    }

}
