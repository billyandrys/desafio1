<?php

const DEBUG = false;

spl_autoload_register('myAutoload');

function myAutoload($className)
{
    $className = ltrim($className, '\\');

    if (DEBUG) {
        echo $className . '<br>';
    }

    $fileName = '';
    $namespace = '';

    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    require $fileName;
}
