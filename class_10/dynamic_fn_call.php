<?php
function addNumber(int $number1, int $number2)
{
    return $number1 + $number2;
}

//echo giveMeFive();

// $result = call_user_func('addNumber', 5, 10);
// var_dump($result);

$result = call_user_func_array('addNumber', [5, 10]);
var_dump($result);