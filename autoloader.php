<?php

spl_autoload_register("myAutoloader");

function myAutoloader($className): bool
{
    $dirs = [
        'controllers',
        'model'
    ];
    $found = false;
    foreach ($dirs as $dir) {
        $fileName = __DIR__ . '\\' . $dir . '\\' . $className . '.php';
        if (is_file($fileName)) {
            require_once($fileName);
            $found = true;
        }
    }

    if (!$found) {
        throw new Error($className . ' не найден');
    }
    return true;
}