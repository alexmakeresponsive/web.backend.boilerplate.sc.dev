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



$article = new \App\Models\Articel();
$article->post_title = 'Заголовок статьи 4';
$article->post_content = 'Контент статьи 4';
$article->id_post_author = 120;
$article->post_date_create = date("Y-m-d H:i:s");
$article->post_date_update = date("Y-m-d H:i:s");
$article->post_date_delete = date("Y-m-d H:i:s", strtotime('+1 years'));
$article->post_excerpt = 'Превью контента 4';
$article->post_status = 'published';
$article->post_comments_ability = 'no-comments';

$article->insert();


$dumper($article);
