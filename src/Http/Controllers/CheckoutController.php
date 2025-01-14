<?php

namespace YiddisheKop\LaravelCommerce\Http\Controllers;

use Illuminate\Http\Request;
use YiddisheKop\LaravelCommerce\Contracts\Order;

class CheckoutController extends Controller
{

    public function __invoke(Request $request, Order $order)
    {

        /** @var \YiddisheKop\LaravelCommerce\Contracts\Gateway $gateway */
        $gateway = new $request->gateway();

        return $gateway->purchase($order, $request);
    }
}
