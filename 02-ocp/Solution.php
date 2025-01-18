<?php
/*
  Open/Closed Principle - OCP
  Principio de aberto / fechado
  
  Princípio: O código deve ser aberto para extensão, mas fechado para modificação.
 
  Solution
*/
interface ShippingMethod
{
  public function paymentCalculate($amount);
}

class CreditShipping implements ShippingMethod
{
  public function paymentCalculate($amount)
  {
    // Set logic
    return $amount;
  }
}
class PaypalShipping implements ShippingMethod
{
  public function paymentCalculate($amount)
  {
    // Set logic
    return $amount;
  }
}

class Shipping
{
  public function setPaymentAndCalculate(ShippingMethod $shippingMethod, $amount)
  {
    $shippingMethod->paymentCalculate($amount);
  }
}

$credit = new CreditShipping();
$shipping = new Shipping();
$shipping->setPaymentAndCalculate($credit, 10);