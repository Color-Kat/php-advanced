<?php

echo '<br><br> ========= goto.php ========= <br><br>';
echo '----------------- GOTO ---------------- <br>';

$n = 0;

start: 
$n++;

if ($n >= 15) {
    goto finish;
}

echo '6';

goto start;

finish:
echo '<br> КОНЕЦ';

echo '<br> =========================';