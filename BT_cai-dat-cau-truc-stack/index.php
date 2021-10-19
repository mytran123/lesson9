<?php
include_once "Stack.php";

$stack = new Stack();
$stack->push(2);
$stack->push(4);
$stack->push(6);
$stack->push(8);
$stack->push(0);
$stack->pop();
$stack->pop();
$stack->pop();
$stack->push(1);
$stack->push(3);
$stack->isEmpty();
//$stack->pop();
//$stack->pop();
//$stack->pop();
//$stack->pop();
//$stack->isEmpty();

echo "<pre>";
print_r($stack);
