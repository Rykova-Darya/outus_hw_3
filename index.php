<?php
require_once "Services/Power.php";
require_once "Services/FibonacciNumber.php";
require_once "Services/Matrix.php";
$power = new Power();
$twoPower = $power->twoPow(3, 13);
$binPower = $power->binPow(2, 10);

$fibonacciNumber = new FibonacciNumber();
$number = $fibonacciNumber->goldFibonacci(6);

$fibonacciMatrix = new Matrix();
$numberF = $fibonacciMatrix->fibonacci(6);
//echo $number;
echo $numberF;