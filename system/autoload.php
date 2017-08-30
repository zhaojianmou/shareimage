<?php

function classLoader($class)
{
    echo 111;
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    echo  $path;
    $file = __DIR__ . '/src/' . $path . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');

//require_once  __DIR__ . '/src/Qiniu/functions.php';
