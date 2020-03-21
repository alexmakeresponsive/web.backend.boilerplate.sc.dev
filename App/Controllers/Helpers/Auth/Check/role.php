<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 19.10.2018
 * Time: 22:55
 */

use App\Model;
use \App\Models\HasRewardsInterface;

//Суть ООП работать не со строками не с числами а с объектами
//то есть передаём и возвращаем целые объекты чтобы быть уверенным что работаем именно с нужным в данный момент времени
//id этого объекта

function checkUser(Model $user)
{
    return $user;
}

function checkAuthor(HasRewardsInterface $author)
{
    return $author;
}