<?php

echo '<br><br> ======== strings.php ========= <br><br>';
echo '----------------- strings ----------------- <br>';

$str = 'Привет';
echo "str - $str <br>";
echo 'strlen() - ' . strlen($str) . '<br>';
echo 'mb_strlen() - ' . mb_strlen($str) . '<br>';

echo '----------<br>';
echo 'strpos and substr:<br>';

$str = 'Php - good language;)<br>';
echo "str - $str <br>";
echo substr($str, strrpos($str, ' - '));

echo '----------<br>';
echo 'str_replace:<br>';

$str = "Hello, my dear [b]Gustov[/b], it's [i]me[/i]";
echo "str before - '$str'";
echo '<br>';

// long variant
// $str = str_replace('[b]', '<b>', $str);
// $str = str_replace('[i]', '<i>', $str);
// $str = str_replace('[/b]', '</b>', $str);
// $str = str_replace('[/i]', '</i>', $str);

// short variant
$str = str_replace(['[b]', '[i]', '[/b]', '[/i]'], ['<b>', '<i>', '</b>', '</i>'], $str);

echo "str after - '$str'";
echo '<br>';

echo '----------<br>';
echo 'nl2br:<br>';

$str = "i\nlove\nphp";
echo 'In string \n do nothing: <br>' . $str . '<br>';
echo 'nl2br replace \n to br: <br> ' . nl2br($str) . '<br>';

echo '----------<br>';
echo 'strip_tags:<br>';

$str = '<b>Жирный текст</b> - <i>курсив</i> и <h1>Заголовок</h1>';
echo "just str - $str";
echo 'htmlspecialchars - ' . htmlspecialchars($str) . '<br>';
echo 'strip_tags($str, "i") - ' . strip_tags($str, '<i>') . '<br>';

echo '----------<br>';
echo 'printf:<br>';
$r = 255;
$g = 130;
$b = 220;

echo "rgb($r, $g, $b) <br>";
printf('#%X%X%X <br>', $r, $g, $b);

echo '<br> ==========================';

