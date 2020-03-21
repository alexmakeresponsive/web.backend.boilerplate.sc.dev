<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 19.10.2018
 * Time: 21:43
 */

namespace App\Models;

//в интерфейсе могут использоваться только public методы
//интерфейсы могут наследоваться друг от друга

//Для автозагрузчика интерфейс ничем не отличается от класса
//Интерфейсы поддерживают множественное наследование
interface ManInterface extends HasRewardsInterface, HasLinksInterface
{
    //так выглядит сигнатура метода. В данном случае аргументов нет
    public function getManCommonRating();
}