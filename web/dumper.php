<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 17.10.2018
 * Time: 12:58
 */

require_once __DIR__ . '/../vendor/autoload.php';

//use Symfony\Component\Finder\Finder;
//
//$finder = new Finder();
//
//$finder->in('../App/');

//dump([
//    'key-1' => [
//        'a' => 'a value'
//    ]
//]);

use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\{HtmlDumper, CliDumper} ;
//
VarDumper::setHandler(function ($var) {
    $cloner     = new VarCloner;
    $cliDumper  = new CliDumper;
    $htmlDumper = new HtmlDumper;

    $dumper = PHP_SAPI === 'cli' ? $cliDumper : $htmlDumper;

    $dumper->dump($cloner->cloneVar($var));
});


return dump;

