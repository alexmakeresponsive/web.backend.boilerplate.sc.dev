<?php
header('Content-Type: text/html; charset=utf-8');

require __DIR__ . '/../App/autoload.php';




$db = new \App\Db();

$data = $db->query('SELECT * FROM posts', []);



//require __DIR__ .'/dumper.php';
$dumper = require __DIR__ .'/dumper.php';


$dumper($data);