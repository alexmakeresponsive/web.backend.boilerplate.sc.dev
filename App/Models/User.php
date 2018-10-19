<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 17.10.2018
 * Time: 18:04
 */

namespace App\Models;

use App\Model;

class User extends Model
{
    protected static $tableName = 'users';
    protected const TABLE_NAME  = 'users';

    protected $id;
    protected $user_login;
    protected $user_password;
    protected $user_name_nice;
    protected $user_email;
    protected $user_date_register;
    protected $user_key_activation;
    protected $user_status;

    protected function getModelName()
    {

    }
}