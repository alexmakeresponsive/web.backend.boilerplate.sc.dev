<?php

function __autoload($class)
{
//    echo $class;
//    echo '<br/>';
//    echo str_replace('\\', '/', $class);
//    echo '<br/>';
//    echo __DIR__;

    require __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';

}