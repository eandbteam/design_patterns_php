<?php
include 'algorithms/fibonacci/fibonacci.php';

$obj = new Fibonacci();
$a =  $obj->calcul(5);
print("Fibonacci(5) : "+$a);

$b = $obj->calculateFibonacci(5);
print("Fibonacci(5) : "+$b);
?>