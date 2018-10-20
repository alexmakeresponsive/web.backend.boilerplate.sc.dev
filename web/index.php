<?php
header('Content-Type: text/html; charset=utf-8');

echo '<style>
        tt, code, kbd, samp {
            font-family: inherit !important;
        }
        body {
            font-family: sans-serif;
//            color: #222222;
            font-size: 14px;
            line-height: 18px;
        }
        .sf-dump:focus {
            outline: none;
        }
      </style>';

//require __DIR__ . '/../App/autoload.php';

require_once __DIR__ . '/../vendor/autoload.php';
$dumper = require __DIR__ .'/dumper.php';


$allPosts = \App\Models\Articel::findAll();

//$dumper($allPosts);


$viewIndex = new \App\View();
$viewIndex->assign('posts', $allPosts);
$viewIndex->render(__DIR__ . '/../App/Views/index.php');

//include __DIR__ . '/../App/Views/index.php';
