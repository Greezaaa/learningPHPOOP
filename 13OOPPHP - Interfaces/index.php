<?php
//Interfaces

//new interface
interface PaymentsInterface
{
    public function payNow();
}

interface LoginInterface
{
    public function loginFirst();
}

class Paypal implements PaymentsInterface, LoginInterface
{
    public function loginFirst()
    {
        # code...
    }
    public function payNow()
    {
        # code...
    }
    public function payentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}
class Visa implements PaymentsInterface
{
    public function loginFirst()
    {
        # code...
    }
    public function payNow()
    {
        # code...
    }
    public function payentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}
class Cash implements PaymentsInterface
{
    public function loginFirst()
    {
        # code...
    }
    public function payNow()
    {
        # code...
    }
    public function payentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}
class BankTransfer implements PaymentsInterface, LoginInterface
{
    public function loginFirst()
    {
        # code...
    }
    public function payNow()
    {
        # code...
    }
    public function payentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class BuyProduct
{
    public function pay(PaymentsInterface $paymentType)
    {
        $paymentType->payNow();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);