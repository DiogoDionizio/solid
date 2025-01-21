<?php
/*
  Lisko Substitution Principle - LSP
  Principio de substituição de Liskov

  Principio: Subclasses devem poder substituir suas classes base sem alterar o comportamento correto do programa
*/
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