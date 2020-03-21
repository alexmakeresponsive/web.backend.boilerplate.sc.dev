<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 17.10.2018
 * Time: 18:04
 */

namespace App\Models;

use App\Model;

//Классы не поддерживают множественное наследование
//Классы могут реализовывать несколько интерфейсов
class Authors extends Model implements ManInterface
{
    protected static $tableName = 'authors';
    protected const TABLE_NAME  = 'authors';

    protected $id;
    protected $author_name_full;
    protected $author_name_nice;
    protected $author_date_start;
    protected $author_product_genres;

    use GetIdTrait;

    protected function getModelName()
    {

    }

    public function getManCommonRating()
    {

    }

    public function getRewardsList()
    {
        // TODO: Implement getRewardsList() method.
    }

    public function getLinksList()
    {
        // TODO: Implement getLinksList() method.
    }
}