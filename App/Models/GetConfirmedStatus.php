<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 19.10.2018
 * Time: 23:44
 */

namespace App\Models;

//из трейта или интерфейса нельзя создать объект
//для автозагрузки и трейты и интерфейсы являются классами
trait GetConfirmedStatus
{
    protected $statusConfirmed;

    protected function getConfirmedStatus(){
        return $this->statusConfirmed;
    }
}