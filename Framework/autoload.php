<?php

declare(strict_types=1);

function autoload($className): void
{
    $path = __DIR__;

    if (str_starts_with($className, 'App\\')) {
        $path .= '/../src/';
    } else if (str_starts_with($className, 'Framework\\')) {
        $path .= '/../';
    }

    $className = str_replace('\\', '/', $className);
    $className = str_replace('App/', '', $className);
    $className = $path.$className.'.php';

    include $className;
}

spl_autoload_register('autoload');
