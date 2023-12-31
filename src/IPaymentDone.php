<?php

namespace Hanoivip\PaymentMethodContract;

interface IPaymentDone
{
    /**
     * 
     * @param number $userId
     * @param string $transId
     * @param IPaymentResult $result
     */
    function onTopupDone($userId, $transId, $result);
}