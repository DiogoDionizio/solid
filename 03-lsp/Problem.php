<?php
/*
  Lisko Substitution Principle - LSP
  Principio de substituição de Liskov

  Principio: Subclasses devem poder substituir suas classes base sem alterar o comportamento correto do programa
*/
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