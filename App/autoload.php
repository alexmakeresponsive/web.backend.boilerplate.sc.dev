<?php

function __autoload($class)
{
    echo 'Class = ' . $class;
    echo '<br/>';

    $nameSpaceFirst = array_shift(explode("\\", $class));
    echo 'nameSpaceFirst = ' . $nameSpaceFirst;
    echo '<br/>';

    if ($nameSpaceFirst === 'App') {
        require __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    }

    if ($nameSpaceFirst === 'Symfony') {
        require_once __DIR__ . '/../vendor/autoload.php';
    }
}