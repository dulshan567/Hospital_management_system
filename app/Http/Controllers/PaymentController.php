<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;
    
    public function __construct($gateway) {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->setClientId('PAYPAL_CLIENT_ID', $gateway);
        $this->gsetClientId(env('PAYPAL_CLIENT_ID',$gateway));
        $this->setSecret(env('PAYPAL_CLIENT_SECRET',$gateway));
        $this->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {

            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

            if ($response->isRedirect()) {
                redirect();
            }
            else{
                return $response->getMessage();
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }


}