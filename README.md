# SOLID - A POC visa esclarecer os conceitos de S.O.L.I.D utilizando o PHP.

## Na pasta "01 - srp" temos o estudo relacionado ao Principio de responsabilidade unica

Single Responsibility Principle - SRP <br>
Principio da responsabilidade unica <br>
Princípio: Uma classe deve ter apenas uma responsabilidade ou razão para mudar.

Temos dois arquivos o "Problem" que mostra a violação gerando o problema e o "Solution" que visa mostrar a solução do problema de como corrigir essa violação.

Arquivo Problem

```php
class Problem
{
  public function create($problem)
  {
    // Logic create problem
  }
  public function sendEmailWithCreateProblem($userEmail)
  {
    // Logic send email problem
  }
}

$problem = new Problem();
$problem->create("Problem one");
$problem->sendEmailWithCreateProblem("johndoe@domain.com");
```

Arquivo Solution

```php
class Problem
{
  public function create($problem)
  {
    // Logic create problem
  }
}
class ServiceEmail
{
  public function sendEmailWithCreateProblem($userEmail)
  {
    // Logic send email
  }
}

$problem = new Problem();
$problem->create("Problem one");

$service = new ServiceEmail();
$service->sendEmailWithCreateProblem("johndoe@domain.com");
```