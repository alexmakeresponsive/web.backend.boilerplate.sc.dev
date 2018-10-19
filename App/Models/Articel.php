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

    protected $id;
    protected $id_post_author;
    protected $post_date_create;
    protected $post_date_update;
    protected $post_date_delete;
    protected $post_content;
    protected $post_title;
    protected $post_excerpt;
    protected $post_status;
    protected $post_comments_ability;

    use GetIdTrait;

    protected function getModelName()
    {

    }
}