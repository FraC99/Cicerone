<?php
namespace classi\users;

use classi\payments\PaymentInterface;
use classi\utilities\Date;

//dichiarazione classe "place"
class User {
    public $name;
    public $surname;
    public $address;
    private $birthDate;
    private $contact;
    private $password;
    private $payment;
    public $language;
    
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    
    public function getContact()
    {
        return $this->contacy;
    }
    
    public function getPayment()
    {
        return $this->payment;
    }
    
    public function setBirthDate(Date $birthDate)
    {
        $this->birthDate = $birthDate;
    }
    
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
    }
    
    public function setPayment(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    
    function __construct() {
        
    }
    
    
}

