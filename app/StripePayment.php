<?php

namespace App;

use App\Contracts\PaymentContract;
use Stripe\Charge;

class StripePayment implements PaymentContract
{

    public function charge($total, $token)
    {
        Charge::create([
            "amount" => $total,
            "currency" => "usd",
            "source" => $token,
            "description" => "Larashop Charge"
        ], [
            'api_key' => config('services.stripe.secret')
        ]);
    }
}
