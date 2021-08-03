<?php

namespace Hanoivip\PaymentMethodContract;

interface IPaymentSession
{
    public function getTransId();
    
    public function getSecureData();
    
    public function getData();
    
    public function getGuide();
}