<?php
/*
  Single Responsibility Principle - SRP
  Principio da responsabilidade unica
  Princípio: Uma classe deve ter apenas uma responsabilidade ou razão para mudar.
*/
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