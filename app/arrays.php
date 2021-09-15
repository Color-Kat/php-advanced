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

echo '<br> ==========================';