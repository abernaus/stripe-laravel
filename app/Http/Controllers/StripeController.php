<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function index()
    {
        return view(view: 'index');
    }

    public function checkout()
    {
        \Stripe\Stripe::setApiKey(config(key: 'stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency'      => 'eur',
                        'product_data'  => [
                            'name' => 'The product name'
                        ],
                        'unit_amount'   => '500' // Means 5.00
                    ],
                    'quantity' => 1
                ],
            ],
            'mode'          => 'payment',
            'success_url'   => route(name: 'success'),
            'cancel_url'    => route(name: 'index')
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return view(view: 'index');
    }
}
