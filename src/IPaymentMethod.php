<?php

namespace Hanoivip\PaymentMethodContract;

use stdClass;

interface IPaymentMethod
{    
    public function config($cfg);
    /**
     * 
     * @param stdClass $trans
     * @return IPaymentSession
     */
    public function beginTrans($trans);
    /**
     * @param stdClass $trans
     * @param array $params
     * @return IPaymentResult
     */
    public function request($trans, $params);
    /**
     * @param stdClass $trans
     */ 
    public function endTrans($trans);
    /**
     * @param stdClass $trans
     */ 
    public function cancel($trans);
    /**
     * 
     * @param stdClass $trans
     * @param boolean $force
     * @return IPaymentResult
     */
    public function query($trans, $force = false);
}