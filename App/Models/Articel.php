<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 17.10.2018
 * Time: 18:04
 */

namespace App\Models;

use App\Model;

class Articel extends Model
{
    protected static $tableName = 'posts';
    protected const TABLE_NAME = 'posts';


    public $id_post_author;
    public $post_date_create;
    public $post_date_update;
    public $post_date_delete;
    public $post_content;
    public $post_title;
    public $post_excerpt;
    public $post_status;
    public $post_comments_ability;

    use GetIdTrait;

    protected function getModelName()
    {

    }
}