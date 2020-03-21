<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 19.10.2018
 * Time: 23:29
 */

namespace App\Models;

//Трэйт не является класом или интерфейсом
//при компиляции содержимое трэйта "вставляется" в класс
trait GetIdTrait
{
    public $id;

    public function getId()
    {
        return $this->id;
    }
}