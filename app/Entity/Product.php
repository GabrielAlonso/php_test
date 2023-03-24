<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Product
{
    public $id;
    public $name;
    public $description;
    public $img;
    public $price_in_eur;

    public static function getProducts($where = null, $order = null, $limit = null)
    {
        return (new Database('product'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getCurrency($product_price){

        $value_price = '';

        if ($_GET['currency'] == 'USD') {
            $value_price = "$ " . number_format((1.08 * $product_price), 2);
        } else if ($_GET['currency'] == 'BRL') {
            // Integration with some API currency converter
            $value_price = "R$ " . number_format((5.70 * $product_price), 2, ",", ".");
        } else {
            // Integration with some API currency converter
            $value_price = number_format($product_price, 2, ",", ".") . " €";
        }

        return $value_price;
    }
}
