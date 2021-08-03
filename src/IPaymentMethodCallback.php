<?php

namespace Hanoivip\PaymentMethodContract;

interface IPaymentMethodCallback
{
    public function callback($params);
}