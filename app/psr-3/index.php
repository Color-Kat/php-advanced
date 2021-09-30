<?php

require('autoload.php');

echo '<br><br> ===== psr-3/index.php ===== <br><br>';
echo '----------------- psr-3 ------------------ <br>';

echo 'PSR-3 standart for LOGGER realizations <br>';


// Передаем в класс логгер, в котором есть метод log ($level, $message, $context)
// его мы реализуем сами
// этот логгер наследуется от AbstractLogger - в нем реализованы 8 различных уровней логгирования, которые вызывают
// абстрактный метод log, который реализован в нашем логгере.
// AbstractLogger наследуется от интерфейса, в котором описаны все эти мтоды уровней логирования

$testLogger = new Test(new \ColorKat\Logger\CLogger);
$testLogger->testLog('Message from my logger');

echo '<br> ==========================';
