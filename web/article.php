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



require_once __DIR__ . '/../vendor/autoload.php';
$dumper = require __DIR__ .'/dumper.php';


//$singlePost = \App\Models\Articel::findById($_GET['id']);
//
//$dumper($singlePost);
//
//$viewIndex = new \App\View();
//$viewIndex->post  = $singlePost;
//$viewIndex->render(__DIR__ . '/../App/Views/article.php');

$ctrl = new \App\Controllers\Articel();
$ctrl->action();
