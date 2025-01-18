<?php
/*
  Single Responsibility Principle - SRP
  Principio da responsabilidade unica
  Princípio: Uma classe deve ter apenas uma responsabilidade ou razão para mudar.

  Exemplo: Violação
*/
class Problem
{
  public function create($problem)
  {
    // Logic create problem
  }
  public function sendEmailWithCreateProblem($userEmail)
  {
    // Logic send email
  }
}

$problem = new Problem();
$problem->create("Problem one");
$problem->sendEmailWithCreateProblem("johndoe@domain.com");