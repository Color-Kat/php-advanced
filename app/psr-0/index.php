<?php
require('autoload.php');

echo '<br><br> ===== psr-0/index.php ===== <br><br>';
echo '----------------- psr-0 ------------------ <br>';

// there must be the autoloader
// namespaces StudlyCase\StudlyCase.php
// or less preferably - Vendor_Prefix_Class.php

$http_client = new ColorKat\Http\Client();

echo '<br> ==========================';
