<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Shop
{
    public $id;
    public $user_id;
    public $product_id;
    public $amount;
    public $date_shop;

    public static function getUser($where = null, $order = null, $limit = null)
    {
        return (new Database('user'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
