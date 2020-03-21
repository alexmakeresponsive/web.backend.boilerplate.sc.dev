<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 19.10.2018
 * Time: 20:41
 */

namespace App;

//можно не делать use т.к. Model находится в том же namespace что и Db
//use App\Db;

//Раннее связывание делатся через self - связывает код на этапе компиляции
//в PHP 3 этапа исполнения кода
//  парсинг - ZendEngine строит дерево исполнения кода
//  компиляция в байт код
//  исполнение

//Позднее связывание с использованием get_called_class
//abstract class Model
//{
//    protected const TABLE_NAME = '';
//
//    abstract protected function getModelName();
//
//    public function findAll() {
//        $class = get_called_class();
//
//        $db = new Db();
////        $sql = 'SELECT * FROM ' . self::TABLE_NAME;
//        $sql = 'SELECT * FROM ' . $class::TABLE_NAME;
//
////        return $db->query($sql, [], self::class);
//        return $db->query($sql, [], $class);
////        return $db->query('SELECT * FROM ' . Articel::$tableName, [], '\App\Models\Articel');
//    }
//}

//Позднее статическое связывание
//Абстрактные классы не поддерживают множественное наследование
//Абстрактные классы могут иметь защищённые и приватные методы в отличие от интерфейса
abstract class Model extends ActiveRecordCustom
{
    abstract protected function getModelName();

    public static function findAll()
    {
        $class = get_called_class();

        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE_NAME;

        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE_NAME . ' WHERE id=:id';

        $data = $db->query(
            $sql , [':id'=>$id], static::class
        );

        return $data ? $data[0] : null;
    }
}