# Lisko Substitution Principle - LSP <br>

Principio de substituição de Liskov <br>

Principio: Subclasses devem poder substituir suas classes base sem alterar o comportamento correto do programa

No arquivo 'Problem' o que está ferindo o principio é que a classe 'Penguin' está implementando uma exceção para o metodo 'fly', dessa forma quebrando o contrato de que todas as subclasses serem executadas sem alterar o comportamento do programa que seria que todos que extenderem 'Bird' pudessem voar (fly).

Arquivo Problem
```php
class Bird
{
  public function fly()
  {
    return "Flying";
  }
}
class Penguin extends Bird
{
  public function fly()
  {
    throw new Exception("Penguin not flying");
  }
}

$penguin = new Penguin();
$penguin->fly();
```

Para solucionar o problema foram criadas duas interfaces a de 'Bird' que apenas
comem pois todos que implementarem ela irão possuir esse metodo 'eat' e uma outra
inteface chamada 'FlyBird' que pode ser implementado caso a classe faça os dois metodos
de 'eat' e 'fly'.

No caso da classe 'Sparrow' ela implementa 'FlyBird' por isso voa e come. Já no caso de 'penguin'
que tem como metodo apenas o 'eat' está implementando o 'Bird'.
Dessa forma não está mais acontecendo a exceção que estava quebrando o contrato da interface.

Arquivo Solution
```php
interface Bird
{
  public function eat();
}
interface FlyBird extends Bird
{
  public function fly();
}
class Sparrow implements FlyBird
{
  public function eat()
  {
    return "Sparrow is eating";
  }
  public function fly()
  {
    return "Sparrow is flying";
  }
}
class Penguin implements Bird
{
  public function eat()
  {
    return "Penguin is eating";
  }
}

$sparrow = new Sparrow();
$sparrow->eat();
$sparrow->fly();

$penguin = new Penguin();
$penguin->eat();
```

[Back (Voltar)](../README.md)