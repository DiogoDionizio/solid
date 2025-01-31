<?php
/*
  Dependency Inversion Principle - DIP <br>
  Principio da inversão de dependencia
  
  Princípio: Dependa de abstrações, não de implementações concretas.
*/
interface DatabaseConnection {
  public function connect();
}
class MySQLConnection implements DatabaseConnection {
  public function connect() {
      // Conecta ao MySQL
  }
}
class PasswordReminder {
  private $connection;
  public function __construct(DatabaseConnection $connection) {
      $this->connection = $connection;
  }
}