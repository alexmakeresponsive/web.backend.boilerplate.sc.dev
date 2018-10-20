<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 20.10.2018
 * Time: 14:17
 */

namespace App;



abstract class ActiveRecordCustom
{
    protected const TABLE_NAME = '';

    public function insert()
    {
        $dumper = require __DIR__ .'/../web/dumper.php';

        $fields = get_object_vars($this);
//        $dumper($fields);

        $dbColumns = [];
        $dbColumnsData = [];

        foreach ($fields as $name => $value) {
            if ( $name === 'id' ) {
                continue;
            }
            $dbColumns[] = $name;
            $dbColumnsData[':' . $name] = $value;
        }

//        $dumper($dbColumns);
//        $dumper($dbColumnsData);

        $sql = 'INSERT INTO 
        ' . static::TABLE_NAME . ' 
        (' . implode(',',$dbColumns) . ')
        VALUES 
        (' . implode(',',array_keys($dbColumnsData)) . ')';
        $dumper($sql);


//        $dumper( date("Y-m-d H:i:s", strtotime('+1 years')) );

        $db = new Db();
        $dumper( $db->execute($sql, $dbColumnsData) );

        $this->id = $db->getLastId();
    }
}