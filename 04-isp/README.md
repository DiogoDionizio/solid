# Interface Segregation Principle - ISP <br>
Principio da segregacao de interface
  
Princípio: Uma interface não deve forçar a implementação de métodos desnecessários.

No arquivo 'Problem' o que está ferindo o principio é que a classe 'RobotWorker' está sendo obrigada a utilizar o metodo 'eat', sendo que robos não comem, o que é inapropriado implementar esse metodo para um robo.

Arquivo Problem
```php
interface Worker
{
  public function work();
  public function eat();
}
class HumanWorker implements Worker
{
  public function work()
  {
    // Logic work
  }
  public function eat()
  {
    // Logic eat
  }
}
class RobotWorker implements Worker
{
  public function work()
  {
    // Logic work
  }
  public function eat()
  {
    // Not appropriate
    // Forced implementation
  }
}
```
Para solucionar o problema foi necessario mudar a interface que antes se chamava 'work' que tinha os dois metodos 'work' e 'eat' para duas novas interfaces dividindo os dois metodos em duas interfaces diferentes uma para work que vai ficar com o nome de 'Workable' e uma para o metodo eat que vai ficar 'Eatable'.

Dessa forma ao implementar uma interface será implementado apenas os metodos necessarios.

Arquivo Solution
```php
interface Workable
{
  public function work();
}
interface Eatable
{
  public function eat();
}
class HumanWorker implements Workable, Eatable
{
  public function work()
  {
    // Logic work
  }
  public function eat()
  {
    // Logic eat
  }
}
class RobotWorker implements Workable
{
  public function work()
  {
    // Logic work
  }
}
```

[Back (Voltar)](../README.md)