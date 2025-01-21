<?php
/*
  Interface Segregation Principle - ISP
  Principio da segregacao de interface
  
  Princípio: Uma interface não deve forçar a implementação de métodos desnecessários.
*/
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