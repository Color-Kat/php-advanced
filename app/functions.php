<?php

echo '<br><br> ======== functions.php ======= <br><br>';
echo '---------------- function ---------------- <br>';

echo 'static $count in function save value when function does not exit: <br>';
function counter() {
    static $count = 0;
    return $count++;
}

echo counter();
echo counter();
echo counter();
echo counter();
echo counter();
echo counter();

echo '----------';
echo '<br>Closure function:<br>';

$mess = 'hi';
// without use($mess) php doesn't see var because it is outside the function
$func = function() use ($mess) {
    echo $mess;
};
$func();

echo '<br> ==========================';