<?php 
namespace classi\payments;
use classi\payments\PaymentInterface;

abstract class AbPayment implements PaymentInterface{
    
    private $import;
    private $paymentType;
    

    public function sendPayment(\classi\payments\float $import)
    {
       $this->import = $import;
        
    }

    public function setPaymentType(\classi\payments\PaymentType $paymentType)
    {
       $this->paymentType = $paymentType; 
    }
    
}
