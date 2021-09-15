<?php

echo '<br><br> ==== comparison_operators.php === <br><br>';
echo '------- COMPARISON operators ------ <br>';

echo 'NOT 10 != 11' , 10 != 10 , '<br>';
echo 'or NOT like in pascal 10 <> 11' , 10 <> 10 , '<br>';

echo 'operator <=> return -1 if a < b, 0 if a = b, 1 if a > b <br>';
echo '10 <=> 11 = ' , 10 <=> 11 , '<br>';
echo '11 <=> 11 = ' , 11 <=> 11 , '<br>';
echo '12 <=> 11 = ' , 12 <=> 11 , '<br>';

function math_module($x) {
    return $x < 0 ? -$x : $x;
}

echo 'math module |42| = ' , math_module(42) , '<br>';
echo 'math module |-42| = ' , math_module(-42) , '<br>';

echo '-------------------------------- <br>';

$x = null;
echo 'x = null; <br> $x ?? "x is null" -> ' , $x ?? 'null' , '<br> <br>';
$y = 'y is string';
echo 'y = "y is string"; <br> $y ?? "y is null" -> ' , $y ?? 'y is null' , '<br>';

echo '<br> ==========================';