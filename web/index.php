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

require __DIR__ . '/../App/autoload.php';



//$article = new App\Models\Articel();
//$data = $article->findAll();


$articlles = \App\Models\Articel::findAll();
$users = \App\Models\User::findAll();


//require __DIR__ .'/dumper.php';
$dumper = require __DIR__ .'/dumper.php';


$dumper($articlles);
$dumper($users);