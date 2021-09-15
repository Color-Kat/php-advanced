<?php

echo '<br><br> ========== loops.php ========= <br><br>';
echo '---------------- LOOPS ----------------- <br>';

echo 'cycle FOR: <br>';
for ($i=0, $j=11, $i<10; $i++, --$j;) {
    echo "$i - $j <br>";
}

echo '<br>cycle FOR - prime numbers: <br>';

for ($i=2; $i<100; $i++) {
    $flag = false;
    for ($j=2; $j<$i; $j++) {
        if ( ($i % $j) != 0 ) {
            continue;
        } else {
            $flag = true;
            break;
        }
    }

    if (!$flag) echo "$i ";
    $flag = false;
}


echo '<br> ==========================';