<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 04.09.2018
 * Time: 13:55
 */

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/config.php')['db'];

        $this->dbh = new \PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['db'],
            $config['user'],
            $config['password']
        );

        echo '<br/>';
        var_dump($this->dbh);

        $this->dbh->exec("set names utf8");
    }

    public function query( $sql, $data=[]) {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);

        return $sth->fetchAll();
    }
}