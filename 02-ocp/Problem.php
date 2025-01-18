<?php
/*
  Open/Closed Principle - OCP
  Principio de aberto / fechado
  
  Princípio: O código deve ser aberto para extensão, mas fechado para modificação.

  Exemplo: Violação
 
  Problem
*/
class Shipping
{
  public function paymentCalculate($type){
    if ($type == 'credit') {
      // Logic credit
    } else if ($type == 'paypal') {
      // Logic paypal
    }
  }
}

$shipping = new Shipping();
$shipping->paymentCalculate('paypal');