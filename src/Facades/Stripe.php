<?php

namespace Finller\Stripe\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Finller\Stripe\Stripe
 *
 * @method static \Stripe\StripeClient client()
 */
class Stripe extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Finller\Stripe\Stripe::class;
    }
}
