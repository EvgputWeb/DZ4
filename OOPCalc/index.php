<?php

require_once 'Calculator.php';
require_once 'Operations/Summator.php';
require_once 'Operations/Factorial.php';
require_once 'Operations/SquareRoot.php';


$myCalc = new Calculator;

$summator = new Summator();
$factorial = new Factorial();
$sqrt = new SquareRoot();


$myCalc->setAction($summator);
$myCalc->setArguments([1,2,3,4,5]);
echo $myCalc->result();

echo "<br>\n";

$myCalc->setAction($factorial);
$myCalc->setArguments([5]);
echo $myCalc->result();

echo "<br>\n";

$myCalc->setAction($sqrt);
$myCalc->setArguments([49]);
echo $myCalc->result();