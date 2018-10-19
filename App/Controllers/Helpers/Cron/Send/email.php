<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 19.10.2018
 * Time: 22:55
 */

use App\Models\HasEmailInterface;

//проверка и использование объектов и есть ООП
function send(HasEmailInterface $user, $message)
{
    return $message;
}