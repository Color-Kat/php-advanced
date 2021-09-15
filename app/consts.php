<?php

echo '========= consts.php ========= <br><br>';
echo '---------------- CONSTS ---------------- <br>';

// create const, define return bool
if (define('TEST_CONSTANT', 'test value')) {
    echo "Const created successfylly <br>";
}

// check does const exist
if (defined ('TEST_CONSTANT')) {
    echo 'TEST_CONSTANT already exists! <br>';
}

// echo constant by string name
$const_name = 'TEST_CONSTANT';
echo constant('TEST_CONSTANT') . '<br>';

echo '----------- CONST CLASS ------------- <br>';

class ConstClass {
    const numberConst = 42;
}

if (defined('ConstClass::numberConst')) {
    echo 'const in class exists <br>';
}

echo ConstClass::numberConst . ' - const in class <br>';
echo (new ConstClass)::numberConst . ' - const in created class <br>';

echo '<br> ==========================';