<?php
/*
  Dependency Inversion Principle - DIP <br>
  Principio da inversão de dependencia
  
  Princípio: Dependa de abstrações, não de implementações concretas.
*/
class PasswordReminder {
  private $mysqlConnection;
  public function __construct(MySQLConnection $mysqlConnection) {
      $this->mysqlConnection = $mysqlConnection;
  }
}