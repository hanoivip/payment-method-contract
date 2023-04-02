<?php

namespace Hanoivip\PaymentMethodContract;

interface IPaymentResult
{
    public function getTransId();
    
    public function isSuccess();
    
    public function isFailure();

    public function isPending();
    
    public function getAmount();
    
    public function getCurrency();
    
    public function getDetail();
    
    public function toArray();
}