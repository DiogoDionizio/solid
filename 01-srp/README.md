# Single Responsibility Principle - SRP <br>
Principio da responsabilidade unica <br>

Princípio: Uma classe deve ter apenas uma responsabilidade ou razão para mudar.

No arquivo Problem o que está ferindo o principio é a classe 'Problem' ter o metodo 'sendEmailWithCreateProblem' de envio de email. A classe 'Problem' tem a responsabilidade de enviar email o que não deveria ser dela.

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

Para solucionar o principio de responsabilidade unica (SRP), foram criadas duas classes, uma para o 'problem' e uma nova para o serviço de email chamada 'ServiceEmail' cujo a sua responsabilidade é fazer o envio de email relacionado a criação de um problema.

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

[Back (Voltar)](../README.md)