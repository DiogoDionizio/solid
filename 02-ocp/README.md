# Open / Closed Principle - OCP <br>
Principio de aberto / fechado <br>
  
Princípio: O código deve ser aberto para extensão, mas fechado para modificação.

No arquivo Problem o que está ferindo o principio é que a classe 'Shipping' recebe no metodo 'paymentCalculate' o tipo de pagamento. Caso seja preciso adicionar um novo meio de pagamento será necessario editar o metodo para fazer a sua inclusão. O que fere o principio de fechado para modificações, uma vez que é preciso modificar para acrescentar um novo metodo de pagamento.

Arquivo Problem
```php
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
```

No arquivo de solução foi criado uma interface 'ShippingMethod' que é um contrato de como devemos seguir para fazer o calculo de pagamento. Caso queiramos criar um novo metodo de pagamento é preciso criar uma nova classe com o nome necessario e implementar essa interface. Alterar a lógica necessaria do calculo para o novo tipo e por ultimo passar ela por parametro para a classe 'Shipping' fazer o calculo.

Dessa forma o nosso código está aberto para extensões uma vez que é só criar uma nova classe implementando a inteface. Mas está fechado para alterações uma vez que não é possivel alterar a classe 'Shipping'.

Arquivo Solution
```php
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
```

[Back (Voltar)](../README.md)