<?php

echo '<br><br> ========= arrays.php ======== <br><br>';
echo '--------------- ARRAYS --------------- <br>';

$arr_42 = [42 => 'start', 'from', '42'];

echo 'array start from 42 index<pre>';
print_r($arr_42);
echo '</pre>';

echo '---------- <br>';

$str = 'i love php';
$arr_str = (array) $str;

echo 'array from string (array) - type casting: <pre>';
print_r($arr_str);
echo '</pre>';

echo '---------- <br>';
$arr = [1, 2, 3];
// list work only on index arrays
list($one, $two, $three) = $arr;
echo 'function list($one, $two) = [1, 2]: <br>';
echo "$one - $two - $three <br>";

echo '---------- <br>';
echo 'exchange of values ​​of variables using list: <br>';

$x = 12.3; $y = 14;
echo "before: x = $x, y = $y <br>";
list($x, $y) = [$y, $x];
echo "after: x = $x, y = $y <br>";

echo '---------- <br>';
echo 'merge arrays using $arr1 + $arr2: <br>';
$arr1 = [0, 1, 2,42];
// no indexes intersect
$arr2 = [2 => 41, 4 => 43];
print_r ($arr2 + $arr1 );

echo '<br>---------- <br>';
echo 'comparison of arrays: <br>';

$arr1 = [0, 1, 2,42];
// no indexes intersect
$arr2 = ['0', true, 2, '42'];
print_r($arr1);
print_r($arr2);
echo '<br>';
if ($arr1 == $arr2) echo 'arrays are equal<br>';
else echo 'arrays are not equal<br>';

echo '---------- <br>';
echo 'in array (0, $arr2): <br>';
echo in_array(0, $arr2) ? 'true' : 'false';
echo '<br>';

echo 'in_array strict (0, $arr2, true): <br>';
echo in_array(0, $arr2, true) ? 'true' : 'false';
echo '<br>';

echo 'array_search (0, $arr2): <br>';
echo array_search(0, $arr2);
echo '<br>';


echo '<br> ==========================';