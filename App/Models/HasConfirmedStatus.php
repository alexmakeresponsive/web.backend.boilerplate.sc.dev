<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 19.10.2018
 * Time: 22:01
 */

namespace App\Models;


interface HasConfirmedStatus
{
    public function getConfirmedStatus();
}