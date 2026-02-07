<?php

function autoload($className)
{
    $path = __DIR__.'/../src/';
    $className = str_replace('\\', '/', $className);
    $className = str_replace('App/', '', $className);
    $className = $path.$className.'.php';

    include $className;
}

spl_autoload_register('autoload');
