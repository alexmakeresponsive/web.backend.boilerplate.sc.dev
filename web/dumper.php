<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 17.10.2018
 * Time: 12:58
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\{HtmlDumper, CliDumper} ;

VarDumper::setHandler(function ($var) {
    $cloner     = new VarCloner;
    $cliDumper  = new CliDumper;
    $htmlDumper = new HtmlDumper;


    //Set styles
//    $htmlDumper->setStyles([
//        'default' => 'background-color:#18171B; color:#FF8400; line-height:1.2em; font:12px Menlo, Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:99999; word-break: break-all',
//        'num' => 'font-weight:bold; color:#1299DA',
//        'const' => 'font-weight:bold',
//        'str' => 'font-weight:bold; color:#56DB3A',
//        'note' => 'color:#1299DA',
//        'ref' => 'color:#A0A0A0',
//        'public' => 'color:#FFFFFF',
//        'protected' => 'color:#FFFFFF',
//        'private' => 'color:#FFFFFF',
//        'meta' => 'color:#B729D9',
//        'key' => 'color:#56DB3A',
//        'index' => 'color:#1299DA',
//        'ellipsis' => 'color:#FF8400',
//    ]);

    $htmlDumper->setStyles([
        'default' => '
            background-color:transparent; color:#000000; 
            line-height:18px; 
            font-family: inherit; 
            font-size: 14px;
            word-wrap: break-word; 
            white-space: pre-wrap; 
            position:relative; 
            z-index:99999; 
            word-break: break-all',
        'num' => 'font-weight:bold; color:#1299DA',
        'const' => 'font-weight:bold',
        'str' => 'font-weight:bold; color:#000000',
        'note' => 'color:#25525C',
        'ref' => 'color:#A0A0A0',

        'public' => 'color:#FFFFFF',
        'protected' => 'color:#4A777D',
        'private' => 'color:#FFFFFF',

        'meta' => 'color:#B729D9',
        'key' => 'color:#000000; ',
        'index' => 'color:#983477',
        'ellipsis' => 'color:#FF8400',
    ]);

    $dumper = PHP_SAPI === 'cli' ? $cliDumper : $htmlDumper;

    $dumper->dump($cloner->cloneVar($var));
});

return dump;

