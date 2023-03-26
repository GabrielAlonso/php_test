<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Shop
{
    public $id;
    public $user_id;
    public $currency_type;
    public $total_price;
    public $product_id;
    public $amount;
    public $date_shop;
    public $name;

    public $email;

    public static function getShop($where = null, $order = null, $limit = null)
    {
        return (new Database('shop'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getShopByProductName($where = null, $order = null, $limit = null)
    {
        return (new Database('shop A INNER JOIN product PR ON A.product_id=PR.id'))->select($where, $order, $limit, "A.*, PR.name")
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function insertShop()
    {
        $this->date_shop = date('Y-m-d H:i:s');

        $obInsert = new Database('shop');
        $obInsert->insert([
            'user_id' => $this->user_id,
            'currency_type' => $this->currency_type,
            'total_price' => $this->total_price,
            'product_id' => $this->product_id,
            'amount' => $this->amount,
            'date_shop' => $this->date_shop
        ]);
    }

    public static function sendEmail($email = null)
    {

        // Config SMTP and smtp_port

        mail($email, 'Successful Purchase!', 'Thanks for shopping with us! Your order will arrive as soon as possible!');
    }
}
