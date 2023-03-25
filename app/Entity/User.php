<?php

namespace App\Entity;


use \App\Db\Database;
use \PDO;

class User
{
    public $id;
    public $username;
    public $password;

    public static function getUser($username = null, $password = null)
    {
        return (new Database('user'))->select("username = '$username' AND password = '$password'")
            ->fetchObject(self::class);
    }
}
