<?php

declare(strict_types=1);

// простой autoload
// spl_autoload_register(function ($class) {
//     include 'src/'.$class.'.php';
// });

// autoload с поддержкой namespaces
// spl_autoload_register(function ($class) {
//     // echo $class;
//     // $class = preg_replace('/_/', DIRECTORY_SEPARATOR, $class);
//     include 'src/'.$class.'.php';
// });

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require 'src'.DIRECTORY_SEPARATOR. $fileName;
}
spl_autoload_register('autoload');