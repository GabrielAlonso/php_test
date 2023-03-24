<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class User
{
    public $id;
    public $username;
    public $password;

    public static function getUser($where = null, $order = null, $limit = null)
    {
        return (new Database('user'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
