<?php
/*
  Interface Segregation Principle - ISP
  Principio da segregacao de interface
  
  Princípio: Uma interface não deve forçar a implementação de métodos desnecessários.
*/
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