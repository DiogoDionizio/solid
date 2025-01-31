# Dependency Inversion Principle - DIP <br>
Principio da inversão de dependencia
  
Princípio: Dependa de abstrações, não de implementações concretas.

No arquivo 'Problem' o que está ferindo o principio é que a classe 'PasswordReminderProblem' está instanciando a classe MySQLConnection direto. Nesse caso não é possivel instanciar outro banco de dados, voce tem uma dependencia da classe concreta do banco de dados.

Arquivo Problem
```php
class PasswordReminder {
  private $mysqlConnection;
  public function __construct(MySQLConnection $mysqlConnection) {
      $this->mysqlConnection = $mysqlConnection;
  }
}
```
Para solucionar o problema foi necessario criar uma interface (abstração) com o nome "DatabaseConnection" e implementar ela na classe 'MySQLConnection' que tem a logica de conexão com o banco de dados 'MySQL' e passamos essa conexão como Injeção de dependencia para classe 'PasswordReminder'. Dessa forma a classe 'PasswordReminder' depende de uma abstração (interface) e não de uma classe 'concreta'.

Arquivo Solution
```php
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
```

[Back (Voltar)](../README.md)